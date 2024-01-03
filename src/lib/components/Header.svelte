<script>
    import { base } from '$app/paths';
	import logo from '$lib/assets/img/gmmd_icon_simple_200w.png'; // gmmd_Icon_475w.png
</script>

<header>
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="{base}/">
				<img src={logo} alt="Give Me My Data logo" class="img-fluid" />
				Give Me My Data
			</a>
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
	.navbar-brand img {
		max-width: 30px;
		width: 100%;
		margin-right: 0.3rem;
	}
</style>
