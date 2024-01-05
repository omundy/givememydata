<script>
    import { base } from '$app/paths';
	import logo from '$lib/assets/img/gmmd_icon_simple_200w.png'; // gmmd_Icon_475w.png
</script>

<a class="navbar-brand" href="{base}/">
    <img src={logo} alt="Give Me My Data logo" class="img-fluid" />
    Give Me My Data
</a>

<style>
	.navbar-brand {
		font-family: var(--header-font-family);
        font-size: 1.3rem;
        color: var(--bs-body-color);
	}
	.navbar-brand img {
		max-width: 30px;
		width: 100%;
		margin-right: 0.3rem;
        vertical-align: -7px;
	}
</style>
