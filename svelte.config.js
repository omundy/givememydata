import { vitePreprocess } from '@sveltejs/vite-plugin-svelte';
import adapter from '@sveltejs/adapter-static';

// FYI
// console.log(123, process.env.NODE_ENV);

/** @type {import('@sveltejs/kit').Config} */
const config = {
	kit: {
        paths: {
            // this did not work on github, internal routes returned 404
            // base: process.env.NODE_ENV === 'production' ? '/givememydata' : ''
            base: process.argv.includes('dev') ? '' : '/givememydata'
		},

		adapter: adapter({
			pages: 'build',
			assets: 'build',
            // this did not work on github, internal routes returned 404
			// fallback: null,
			fallback: '404.html', // to specify a fallback page for SPA mode
			precompress: false,
			strict: true
		})
	},

	preprocess: [vitePreprocess({})]
};

export default config;
