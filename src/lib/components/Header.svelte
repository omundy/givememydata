<script>
	import Brand from '$lib/components/Brand.svelte';
</script>

<header>
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<Brand />
			<button
				class="navbar-toggler"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent"
				aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<slot name="Navbar" />
			</div>
		</div>
	</nav>
</header>

<style>
	.navbar {
		background-color: white !important;
	}
</style>
