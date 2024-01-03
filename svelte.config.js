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
			fallback: '404.html',
			precompress: true
			// strict: true
		})
	},

	preprocess: [vitePreprocess({})]
};

export default config;
