// Reference for below settings
// https://dev.to/robertobutti/how-to-start-building-your-static-website-with-svelte-and-tailwindcss-hbk

// Generate a static html file for your page.
// Documentation: https://kit.svelte.dev/docs/page-options#prerender
export const prerender = true;

// Set false to generate an SPA
// Otherwise set true (or comment the line)
// Documentation: https://kit.svelte.dev/docs/page-options#ssr
export const ssr = true;

// How to manage the trailing slashes in the URLs
// the URL for about page witll be /about with 'ignore' (default)
// the URL for about page witll be /about/ with 'always'
// https://kit.svelte.dev/docs/page-options#trailingslash
export const trailingSlash = 'ignore';

// console.log('Hello from +layout.js');
