<script>
	import { base } from '$app/paths';

	export let title = 'Visualizations';
	import { setTitle } from '$lib/document';
	setTitle(title);
</script>

<div class="container py-5">
	<div class="row">
		<div class="col-12 col-lg-8 offset-lg-2">
			<h1>{title}</h1>

			<p>
				The following images were created with data retrieved by Give Me My Data. I'm making high resolution versions
				available for editorial purposes only. Please contact me if you use these.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-sm-6 col-md-4">
			<figure class="figure">
			<a href="{base}/assets/img/fb_friends_20101127_blue-dots_2000w.png" target="_blank"
				><img
					src="{base}/assets/img/fb_friends_20101127_blue-dots_600w.png"
					alt="Friends network graph [2011-11-27] visualization by Owen Mundy"
					class="img-fluid w-100" /></a>
			<figcaption class="figure-caption">Friends network graph [2011-11-27] (3.4MB)</figcaption>
			</figure>
		</div>

		<div class="col-12 col-sm-6 col-md-4">
			<figure class="figure">
			<a href="{base}/assets/img/fb_mutualfriends_20101123_3_fb-blue_2000w.png" target="_blank"
				><img
					src="{base}/assets/img/fb_mutualfriends_20101123_3_fb-blue_600w.png"
					alt="Mutual friends network graph [2010-11-27] visualization by Owen Mundy"
					class="img-fluid w-100" /></a>
			<figcaption class="figure-caption">Mutual friends network graph [2010-11-27] (8.7MB)</figcaption>
			</figure>
		</div>

		<div class="col-12 col-sm-6 col-md-4">
			<figure class="figure">
				<a href="{base}/assets/img/fb_friends_20100128_white_3000w.png" target="_blank"
					><img
						src="{base}/assets/img/fb_friends_20100128_white_600w.png"
						alt="Friends network graph [2010-04-30] visualization by Owen Mundy"
						class="figure-img img-fluid w-100" /></a>
				<figcaption class="figure-caption">Friends network graph [2010-04-30] (2.1MB)</figcaption>
			</figure>
		</div>

		<div class="col-12 col-sm-6 col-md-4">
			<figure class="figure">
			<a href="{base}/assets/img/fb_mutualfriends_20091114_black_3000w.png" target="_blank"
				><img
					src="{base}/assets/img/fb_mutualfriends_20091114_black_600w.png"
					alt="Mutual friends network graph [2009-11-14] visualization by Owen Mundy"
					class="img-fluid w-100" /></a>
			<figcaption class="figure-caption">Mutual friends network graph [2009-11-14] (1.9MB)</figcaption>
			</figure>
		</div>

		<div class="col-12 col-sm-6 col-md-4">
			<figure class="figure">
			<a href="{base}/assets/img/fb_mutualfriends_20100430_dark3_3000w.png" target="_blank"
				><img
					src="{base}/assets/img/fb_mutualfriends_20100430_dark3_600w.png"
					alt="Mutual friends network graph [2010-04-30] visualization by Owen Mundy"
					class="img-fluid w-100" /></a>
			<figcaption class="figure-caption">Mutual friends network graph [2010-04-30] (2.5MB)</figcaption>
			</figure>
		</div>

		<div class="col-12 col-sm-6 col-md-4">
			<figure class="figure">
			<a href="{base}/assets/img/fb_profile_xml_20100430_1000w.png" target="_blank"
				><img
					src="{base}/assets/img/fb_profile_xml_20100430_600w.png"
					alt="XML of Facebook Profile Page [2010-04-30] visualization by Owen Mundy"
					class="img-fluid w-100" /></a>
			<figcaption class="figure-caption">XML of Facebook Profile Page [2010-04-30] (528KB)</figcaption>
			</figure>
		</div>
	</div>
</div>

<style>
	/* CSS styles */
</style>
