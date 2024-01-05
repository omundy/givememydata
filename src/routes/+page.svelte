<script>
	import { base } from '$app/paths';

	export let title = 'Home';
	import { setTitle } from '$lib/document';
	setTitle(title);
</script>

<div class="container py-5">
	<div class="row">
		<div class="col-12 col-lg-8 offset-lg-2">
			<div class="callout" style="text-align: center">
				<div class="logo">
					<a href="{base}/" title="home"
						><img src="{base}/assets/img/gmmd_Icon_475w.png" width="90" height="90" alt="Give Me My Data fancy logo" /></a>
				</div>

				<h1 class="mt-3">Give Me My Data 2009–2016</h1>
			</div>

			<br />
			<p>
				Launched in 2009, <a href="{base}/about" target="_blank">Give Me My Data</a> helped thousands of users
				retrieve their data from Facebook. Whether they wanted their information in reusable data formats to make visualizations,
				archive it, or to see exactly what Facebook was tracking and sharing about them, Give Me My Data provided this utility,
				free of charge.
			</p>

			<p>
				In late 2010, six months after <a
					href="http://gadgetwise.blogs.nytimes.com/2010/05/01/facebook-app-brings-back-data/"
					target="_blank"><i>The New York Times</i></a> and others wrote about how my app helped users access their personal
				data, Facebook suddenly launched their own version. It’s no coincidence Facebook released a similar service just
				months after Give Me My Data’s popularity began. The broad attention my app received showed Facebook they needed
				to provide the growing number of users dissatisfied with the lack of transparency of their platform access and agency
				over their own data. It is sad, but not surprising that Facebook’s service only provides data in a non-reusable data
				format. As a commercial entity that profits from data they collect by surveilling citizens around the world, Facebook
				has an overwhelming private interest in keeping that data out of the hands of competitors.
			</p>

			<p>
				Accordingly, Facebook recently began requiring all apps using their platform to upgrade to version 2.0 of their
				API. With this upgrade Facebook introduced a “Login Review” process to restrict which user data permissions
				third-party apps could request. Under this process, Facebook can now impede what data can be accessed by apps,
				and alas, whether users can access their own data. While <a
					href="https://developers.facebook.com/docs/facebook-login/review/what-is-login-review"
					target="_blank">presented as a beneficial feature</a
				>, this process ultimately allows Facebook to censor apps they don’t like. In May 2015, using Login Review
				Facebook rejected my app multiple times. Despite repeated attempts to contact them to explain how my app helps
				their platform, Facebook has only responded with generic rejection notices.
			</p>

			<p>
				Therefore, after 6 years of developing and supporting a free, public software, I have decided to discontinue
				Give Me My Data. My app, which was based on the East German Stasi protest slogan, “<a
					href="http://www.bstu.bund.de/DE/Wissen/Bildung/Materialien/Unterrichtsmedien/schulausstellung_freiheit-fuer-meine-akte.html"
					target="_blank">Freiheit für Meine Akte!</a
				>,” was subversive in rhetoric and utilitarian in approach, but in the end was too dependent on the platform it
				critiqued. Thank you to everyone who used it and supported me in this process.
			</p>


			<p>Owen Mundy</p>

			<p>
				PS. If you would like to access the data you have put on Facebook, as well as the data Facebook has collected
				about you, in a reusable format, you still can by directly accessing Facebook’s API through their Graph API
				Explorer. Follow the instructions in <a href="https://youtu.be/WteK95AppF4" target="_blank"
					>this video to learn more</a
				>.
			</p>
		</div>
	</div>
</div>

<style>
	/* CSS styles */
</style>
