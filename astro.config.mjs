import { defineConfig } from 'astro/config';

// Keep dev server unprefixed for convenience; GitHub Pages project sites
// are served from /<repo-name>/, so production needs that base prefix.
const isDev = process.argv.includes('dev');

export default defineConfig({
	base: isDev ? '/' : '/givememydata',
	outDir: 'build',
	trailingSlash: 'ignore',
	vite: {
		css: {
			preprocessorOptions: {
				// Bootstrap 5.3's SCSS still uses Sass APIs Dart Sass deprecated
				// (color functions, @import, etc.); quietDeps silences warnings
				// from node_modules while keeping them for our own styles. We
				// also cherry-pick Bootstrap partials via @import ourselves
				// (Bootstrap doesn't support @use-style selective imports
				// until v6), so silence that deprecation explicitly too.
				scss: { quietDeps: true, silenceDeprecations: ['import'] }
			}
		}
	}
});
