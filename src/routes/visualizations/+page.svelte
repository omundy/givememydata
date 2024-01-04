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
		<div class="col-4">
			<a href="{base}/assets/img/fb_friends_20101127_blue-dots_2000w.png" target="_blank"
				><img
					src="{base}/assets/img/fb_friends_20101127_blue-dots_300w.png"
					alt="Visualization by Owen Mundy"
					class="img-fluid w-100" /></a>
			<div class="thumb_caption">Friends network graph [2011-11-27] (3.4MB)</div>
		</div>

		<div class="col-4">
			<a href="{base}/assets/img/fb_mutualfriends_20101123_3_fb-blue_2000w.png" target="_blank"
				><img
					src="{base}/assets/img/fb_mutualfriends_20101123_3_fb-blue_300w.png"
					alt="Visualization by Owen Mundy"
					class="img-fluid w-100" /></a>
			<div class="thumb_caption">Mutual friends network graph [2010-11-27] (8.7MB)</div>
		</div>

		<div class="col-4">
			<a href="{base}/assets/img/fb_friends_20100128_white_3000w.png" target="_blank"
				><img
					src="{base}/assets/img/fb_friends_20100128_white_300w.png"
					alt="Visualization by Owen Mundy"
					class="img-fluid w-100" /></a>
			<div class="thumb_caption">Friends network graph [2010-04-30] (2.1MB)</div>
		</div>

		<div class="col-4">
			<a href="{base}/assets/img/fb_mutualfriends_20091114_black_3000w.png" target="_blank"
				><img
					src="{base}/assets/img/fb_mutualfriends_20091114_black_300w.png"
					alt="Visualization by Owen Mundy"
					class="img-fluid w-100" /></a>
			<div class="thumb_caption">Mutual friends network graph [2009-11-14] (1.9MB)</div>
		</div>

		<div class="col-4">
			<a href="{base}/assets/img/fb_mutualfriends_20100430_dark3_3000w.png" target="_blank"
				><img
					src="{base}/assets/img/fb_mutualfriends_20100430_dark3_300w.png"
					alt="Visualization by Owen Mundy"
					class="img-fluid w-100" /></a>
			<div class="thumb_caption">Mutual friends network graph [2010-04-30] (2.5MB)</div>
		</div>

		<div class="col-4">
			<a href="{base}/assets/img/fb_profile_xml_20100430_1000w.png" target="_blank"
				><img
					src="{base}/assets/img/fb_profile_xml_20100430_300w.png"
					alt="Visualization by Owen Mundy"
					class="img-fluid w-100" /></a>
			<div class="thumb_caption">XML of Facebook Profile Page [2010-04-30] (528KB)</div>
		</div>
	</div>
</div>

<style>
	/* CSS styles */
</style>
