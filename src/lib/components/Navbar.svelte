<script>
	import { page } from '$app/stores';
	import { base } from '$app/paths';
	// console.log($page.url.pathname)
	export let location = '';
</script>

<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
	<li class="nav-item">
		<a
			class="nav-link"
			class:p-0={location === 'footer'}
			class:active={$page.url.pathname === '/'}
			aria-current={$page.url.pathname === '/' ? 'page' : undefined}
			href="{base}/">Status</a>
	</li>
	<li class="nav-item">
		<a
			class="nav-link"
			class:p-0={location === 'footer'}
			class:active={$page.url.pathname === '/about'}
			aria-current={$page.url.pathname === '/about' ? 'page' : undefined}
			href="{base}/about">About</a>
	</li>
	<li class="nav-item">
		<a
			class="nav-link"
			class:p-0={location === 'footer'}
			class:active={$page.url.pathname === '/visualizations'}
			aria-current={$page.url.pathname === '/visualizations' ? 'page' : undefined}
			href="{base}/visualizations">Visualizations</a>
	</li>
	<li class="nav-item">
		<a
			class="nav-link"
			class:p-0={location === 'footer'}
			class:active={$page.url.pathname === '/faq'}
			aria-current={$page.url.pathname === '/faq' ? 'page' : undefined}
			href="{base}/faq">FAQ</a>
	</li>
	<li class="nav-item">
		<a
			class="nav-link"
			class:p-0={location === 'footer'}
			class:active={$page.url.pathname === '/credits'}
			aria-current="{$page.url.pathname === '/credits' ? 'page' : undefined}"
			href="{base}/credits">Credits</a>
	</li>
</ul>

<style>
	.navbar-nav .nav-link.active {
		color: var(--primary);
		text-decoration: underline;
	}
</style>
