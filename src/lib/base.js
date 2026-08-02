// Astro's BASE_URL always has a trailing slash; strip it so callers can do
// `${base}/about` the same way the old `$app/paths` base worked.
export const base = import.meta.env.BASE_URL.replace(/\/$/, '');
