<script>
	// @ts-nocheck

	import { page } from '$app/stores';
	// console.log($page.url.pathname)
</script>

<div class="container my-3">
	<div class="row">
		<div class="col">
			<h1>{$page.status}: {$page.error.message ?? 'Error'}</h1>
			<a href="/">Go home</a>
		</div>
	</div>
</div>
