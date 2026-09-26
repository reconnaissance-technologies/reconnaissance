import type { Metadata } from "next";
// Self-hosted via @fontsource (not next/font/google): avoids a runtime/build
// dependency on Google's font CDN, which this environment can't reach and
// which some networks/regions block in production too.
import "@fontsource/instrument-sans/400.css";
import "@fontsource/instrument-sans/500.css";
import "@fontsource/ibm-plex-sans/400.css";
import "./globals.css";
import { Header } from "@/components/nav/Header";

export const metadata: Metadata = {
  title: "Reconnaissance Technologies",
  description: "Enterprise IT & Secure Software",
};

export default function RootLayout({ children }: LayoutProps<"/">) {
  return (
    <html lang="en" className="h-full antialiased">
      <body className="min-h-full flex flex-col">
        <Header />
        {children}
      </body>
    </html>
  );
}
