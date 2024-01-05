<script>
	// @ts-nocheck

	import { base } from '$app/paths';
	import { page } from '$app/stores';
	// console.log($page.url.pathname)

	export let title = 'Error';
	import { setTitle } from '$lib/document';
	setTitle(title);
</script>

<div class="container py-5">
	<div class="row">
		<div class="col-12 col-lg-8 offset-lg-2">
			<h1>{$page.status}: {$page.error.message ?? 'Error'}</h1>
			<a href="{base}/">Go home</a>
		</div>
	</div>
</div>
