import { defineConfig } from 'astro/config';

// Keep dev server unprefixed for convenience; GitHub Pages project sites
// are served from /<repo-name>/, so production needs that base prefix.
const isDev = process.argv.includes('dev');

export default defineConfig({
	base: isDev ? '/' : '/givememydata',
	outDir: 'build',
	trailingSlash: 'ignore'
});
