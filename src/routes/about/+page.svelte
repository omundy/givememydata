<script>
	import { base } from '$app/paths';

	export let title = 'About';
	import { setTitle } from '$lib/document';
	setTitle(title);
</script>

<div class="container py-5">
	<div class="row">
		<div class="col-12 col-lg-8 offset-lg-2">
			<h1>{title}</h1>

			<div class="callout">Give Me My Data helps you<br /> reclaim and reuse your Facebook data.</div>

			<p>
				Give Me My Data <s>is</s> was a Facebook application that helps users export their data out of Facebook for reuse
				in visualizations, archives, or any possible method of digital storytelling. Data can be exported in common formats
				like CSV, XML, and JSON as well as customized network graph formats.
			</p>

			<p>
				According to Facebook's <a href="http://www.facebook.com/terms.php" target="_blank"
					>Statement of Rights and Responsibilities</a
				>:
			</p>

			<blockquote class="well">
				"You own all of the content and information you post on Facebook, and you can control how it is shared through
				your privacy and application settings."
			</blockquote>

			<p>Give Me My Data helps you to exercise this right by presenting your information in easy to use formats.</p>

			<h2>Why Reclaim Your Data?</h2>

			<p>
				While clearly utilitarian, this project intervenes into online user experiences, provoking users to take a
				critical look at their interactions within social networking websites. It suggests data is tangible and
				challenges users to think about ways in which their information is used for purposes outside of their control by
				government or corporate entities.
			</p>

			<h2 id="inspiration">Inspiration for the project</h2>

			<p>
				During the final days of the German Democratic Republic (or GDR, a.k.a. "East Germany") it became evident that
				their Ministry for State Security (more popularly known as the "Stasi") was destroying incriminating evidence
				from its 40-year history of domestic and international surveillance. These documents, which the Stasi was
				attempting to destroy using shredding machines, as well as by hand when the machines failed, included
				information gathered through various clandestine methods about lives of citizens of the GDR without their
				knowledge or consent.
			</p>

			<figure class="figure">
				<img
					src="{base}/assets/img/gmmd_stasi-history-only_900w.png"
					class="figure-img img-fluid w-100"
					alt="Stasi files controversy - Freiheit für meine Akte!" />
				<figcaption class="figure-caption">
					Image of Ministry for State Security guardhouse (left) by <a
						href="http://www.flickr.com/photos/michael_westdickenberg/2975367800/in/set-72157608333370862"
						target="_blank">Michael Westdickenberg</a>
				</figcaption>
			</figure>

			<p>
				On January 15, 1990, protestors stormed the Stasi headquarters in Berlin in attempt to prevent the destruction
				of personal records which they felt they should be able to access. The phrase, "Freiheit für meine Akte!" (in
				English: Freedom for my file!) spray painted on the Stasi guardhouse during this protest embodies a desire by
				citizens to open this closed world of state surveillance in order to understand the methods of control employed
				the Stasi
			</p>

			<p>
				At the height of its operations, the Stasi is believed to have hired, between spies and full- and part-time
				informants, one in every 6.5 East German citizens to report suspicious activities, almost 2.5 million people.1
				At this moment, the ratio of people entering data on Facebook to non-members is one in fourteen for the entire
				world,2 introducing possibly the most effective surveillance machine in history.
			</p>

			<p>
				The name and project, "Give Me My Data," is inspired by all such citizen movements which aspire to know what
				information that government or private organizations gather, store, and use to maintain their powerful
				positions.
			</p>
		</div>
	</div>
</div>

<style>
	/* CSS styles */
</style>
