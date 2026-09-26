import type { NextConfig } from "next";

const nextConfig: NextConfig = {
  images: {
    // Local, trusted placeholder/UI SVGs (see public/) — not user uploads.
    dangerouslyAllowSVG: true,
  },
};

export default nextConfig;
