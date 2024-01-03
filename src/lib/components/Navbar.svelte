<script>
	import { page } from '$app/stores';
    import { base } from '$app/paths';
	// console.log($page.url.pathname)
</script>

<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
	<li class="nav-item">
		<a class="nav-link" class:active={$page.url.pathname === '/'} aria-current="page" href="{base}/"
			>Home</a
		>
	</li>
	<li class="nav-item">
		<a class="nav-link" class:active={$page.url.pathname === '/about'} href="{base}/about">About</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" class:active={$page.url.pathname === '/statement'} href="{base}/statement"
			>Statement</a
		>
	</li>
	<li class="nav-item">
		<a
			class="nav-link"
			class:active={$page.url.pathname === '/visualizations'}
			href="{base}/visualizations">Visualizations</a
		>
	</li>
	<li class="nav-item">
		<a class="nav-link" class:active={$page.url.pathname === '/faq'} href="{base}/faq">FAQ</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" class:active={$page.url.pathname === '/credits'} href="{base}/credits">Credits</a>
	</li>
</ul>

<style>
	.navbar-nav .nav-link {
		color: var(--primary);
	}
	.active {
		background-color: var(--primary);
	}
</style>
