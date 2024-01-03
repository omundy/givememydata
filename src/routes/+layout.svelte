<script>
	import '../app.scss';

	// if you want to generate a static html file for your page.
	// Documentation: https://kit.svelte.dev/docs/page-options#prerender
	export const prerender = true;

	// if you want to Generate a SPA you have to set ssr to false.
	// This is not the case (so set as true or comment the line)
	// Documentation: https://kit.svelte.dev/docs/page-options#ssr
	export const ssr = true;

	// How to manage the trailing slashes in the URLs
	// the URL for about page witll be /about with 'ignore' (default)
	// the URL for about page witll be /about/ with 'always'
	// https://kit.svelte.dev/docs/page-options#trailingslash
	export const trailingSlash = 'always';

	import Footer from '$lib/components/Footer.svelte';
	import Header from '$lib/components/Header.svelte';
	import Navbar from '$lib/components/Navbar.svelte';

	// share path with components
	import { page } from '$app/stores';
	// const path = $page.url.pathname;
	// or use directly in this page with $page.url.pathname
</script>

<svelte:head>
	<title>{$page.data.title ?? 'Give Me My Data'}</title>
</svelte:head>

<div class="layout">
	<Header>
		<Navbar slot="Navbar" />
	</Header>
	<main>
		<slot />
	</main>
	<Footer>
		<Navbar slot="Navbar" />
	</Footer>
</div>

<style>
	.layout {
		background-color: var(--grey-light1) !important;
	}
	main {
		min-height: 600px;
		background-color: white !important;
	}
</style>
