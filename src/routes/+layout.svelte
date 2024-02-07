<script>
	import Header from '$lib/components/Header.svelte';
	import Navbar from '$lib/components/Navbar.svelte';
	import Footer from '$lib/components/Footer.svelte';

	// fix to load bootstrap.js
	// https://github.com/svelte-add/svelte-add/issues/327
	import { onMount } from 'svelte';
	import '../app.scss';
	import { browser } from '$app/environment';
	onMount(async () => {
		if (!browser) return;
		await import('bootstrap');
	});

	import { setTitle } from '$lib/document';
	let title = setTitle('');
</script>

<!-- <svelte:head>
	<title>{title ? title + ' | ' : ''} Give Me My Data</title>
</svelte:head> -->

<div class="layout">
	<Header>
		<Navbar slot="Navbar" location="header" />
	</Header>
	<main>
		<slot />
	</main>
	<Footer>
		<Navbar slot="Navbar" location="footer" />
	</Footer>
</div>

<style>
	.layout {
		background-color: var(--grey-light1) !important;

        /* always move footer to bottom of viewport - part 1 */
		display: flex;
		flex-direction: column;
		min-height: 100vh;
	}
	main {
		min-height: 600px;
		background-color: white !important;

        /* always move footer to bottom of viewport - part 2 */
		flex: 1;
	}
</style>
