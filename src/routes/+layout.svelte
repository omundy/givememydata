<script>
	import '../app.scss';
	import Footer from '$lib/components/Footer.svelte';
	import Header from '$lib/components/Header.svelte';
	import Navbar from '$lib/components/Navbar.svelte';

	import { setTitle } from '$lib/document';
	setTitle('');
</script>

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
