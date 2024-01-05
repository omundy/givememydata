<script>
	import Brand from '$lib/components/Brand.svelte';
</script>

<footer class="container-fluid py-4">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8 order-2 order-lg-1 mt-3 mt-lg-0">
				<slot name="Navbar" location="footer" />
			</div>
			<div class="col-12 col-lg-4 order-1 order-lg-2 mt-0 mt-lg-3">
				<Brand />
			</div>
		</div>
	</div>
</footer>

<style>
	footer {
		background-color: var(--grey-light1) !important;
	}
</style>
