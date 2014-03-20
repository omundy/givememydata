
	
README for Give Me My Data
======================================================

Give Me My Data is a Facebook application that helps users export their data out of Facebook for reuse in visualizations, archives, or any possible method of digital storytelling. Data can be exported in common formats like CSV, XML, and JSON as well as customized network graph formats.

More information: http://givememydata.com/
Live application: https://apps.facebook.com/give_me_my_data/


Usage
======================================================

1. Visit https://developers.facebook.com/ and Register as a developer
2. Create a new Facebook Application
3. Remove the ".example" extension from /inc/fb_config.php.example
4. Paste the App ID/API Key, App Secret, and App Namespace into /inc/fb_config.php


Software included in this project
======================================================

Facebook PHP SDK (v.3.2.2)
https://github.com/facebook/facebook-php-sdk


To do list for developers who want to contribute
======================================================

+ Deal with pagination



Data

+ ~~Retrieve mutual friends~~


		<li><del>Get data from groups</del>.</li>
		<li>Export "all."</li>
		<li>Translate UNIX timestamp to human-readable <a href="http://en.wikipedia.org/wiki/ISO_8601" target="_blank">ISO-8601 / W3 datetime</a> (defaults to user's timezone).</li>
		<li><del>Figure out why calls for data in excess of specific amounts returns errors or truncated sections (e.g. >= 1,872 links, >= 573 messages, "a bazillion" status updates).</del></li>
		<li>Get more than 1000 status updates. (5 requests)</li>
		<li>Get comment threads / thread posts / comments. (3 requests)</li>
		<li>Slow connections seem to be causing errors.</li>
		<li><del>Migrate application to new API</del>.</li>
		<li>Create link to download photos stored in Facebook.</li>
		<li><del>Fix character entities for XML export.</del></li>
		<li>Add filter parameters / or accommodate pagination somehow so users can go further back in time (past FB default).</li>
	</ul>
	
	<b>Formats</b>
	<ul>
		<li>Create link to download data in common file formats (XLS, DOC).</li>
		<li>Fix CSV files for multiples.</li>
		<li><del>Fix XML node types.</del></li>
		<li>Export in FOAF.</li>
		<li>Finish MM format.</li>
	</ul>
	
	<b>Usability</b>
	<ul>
		<li>Instructions for using data to make images.</li>
	</ul>

