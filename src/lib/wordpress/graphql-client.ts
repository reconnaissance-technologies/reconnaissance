/**
 * Minimal WPGraphQL client — a thin `fetch` wrapper rather than a full
 * library (graphql-request/urql/etc.), since this app only has one
 * GraphQL consumer so far (the mega menu's `getSiteNavigation`, see
 * `src/lib/navigation/get-site-navigation.ts`). Revisit this if/when more
 * queries are added and typed codegen becomes worth the setup (see the
 * architecture plan §3 checklist item: "GraphQL client + typed queries").
 *
 * Endpoint defaults to the local dev site's WPGraphQL endpoint
 * (confirmed live at this path via wp-admin → GraphQL → GraphiQL IDE).
 * Override with WORDPRESS_GRAPHQL_URL for other environments (staging,
 * or the `wp.`/`cms.` subdomain planned for cutover — see architecture
 * plan §0).
 */

const WORDPRESS_GRAPHQL_URL = process.env.WORDPRESS_GRAPHQL_URL ?? "https://reconnaissance.test/graphql";

export class WordPressGraphQLError extends Error {
  constructor(message: string, public readonly cause?: unknown) {
    super(message);
    this.name = "WordPressGraphQLError";
  }
}

type GraphQLResponse<TData> = {
  data?: TData;
  errors?: { message: string }[];
};

/**
 * Runs a GraphQL query/mutation against the WordPress install.
 *
 * Uses Next.js's extended `fetch` for ISR: results are cached and
 * revalidated in the background every `revalidateSeconds`, rather than
 * refetched on every request. This is a placeholder for the on-demand
 * revalidation webhook described in the architecture plan §2/§3 ("Webhook
 * on save/publish → triggers Next.js on-demand revalidation") — once that
 * exists, editors won't have to wait out this window to see nav changes.
 */
export async function wordpressGraphQL<TData>(
  query: string,
  variables?: Record<string, unknown>,
  { revalidateSeconds = 300 }: { revalidateSeconds?: number } = {}
): Promise<TData> {
  let res: Response;
  try {
    res = await fetch(WORDPRESS_GRAPHQL_URL, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ query, variables }),
      next: { revalidate: revalidateSeconds },
    });
  } catch (cause) {
    throw new WordPressGraphQLError(`Could not reach WPGraphQL at ${WORDPRESS_GRAPHQL_URL}`, cause);
  }

  if (!res.ok) {
    throw new WordPressGraphQLError(`WPGraphQL request failed: ${res.status} ${res.statusText}`);
  }

  const json = (await res.json()) as GraphQLResponse<TData>;

  if (json.errors?.length) {
    throw new WordPressGraphQLError(json.errors.map((e) => e.message).join("; "));
  }

  if (!json.data) {
    throw new WordPressGraphQLError("WPGraphQL response had no `data`");
  }

  return json.data;
}
