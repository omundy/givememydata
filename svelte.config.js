import { vitePreprocess } from '@sveltejs/vite-plugin-svelte';
import adapter from '@sveltejs/adapter-static';

/** @type {import('@sveltejs/kit').Config} */
const config = {
	kit: {
		paths: {
			base: process.env.NODE_ENV === 'production' ? '/givememydata' : ''
		},

		adapter: adapter({
			pages: 'build',
			assets: 'build',
			fallback: null,
			// fallback: '404.html', // to specify a fallback page for SPA mode
			precompress: false,
			strict: true
		})
	},

	preprocess: [vitePreprocess({})]
};

export default config;
