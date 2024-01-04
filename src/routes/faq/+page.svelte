<script>
	import { base } from '$app/paths';

	export let title = 'Frequently Asked Questions';
	import { setTitle } from '$lib/document';
	setTitle(title);
</script>

<div class="container py-5">
	<div class="row">
		<div class="col-12 col-lg-8 offset-lg-2">
			<h1>{title}</h1>

			<h2>How To Use</h2>

			<p>
				<a href="{base}/assets/img/app_20100428_howto_data.png" target="_blank">
					<img src="{base}/assets/img/app_20100428_howto_data_t.png" alt="screenshot" /></a>
				<a href="{base}/assets/img/app_20100428_howto_format.png" target="_blank">
					<img src="{base}/assets/img/app_20100428_howto_format_t.png" alt="screenshot" /></a>
				<a href="{base}/assets/img/app_20100428.png" target="_blank">
					<img src="{base}/assets/img/app_20100428_t.png" alt="screenshot" /></a>
			</p>

			<ol>
				<li>Select the data type you wish to retrieve.</li>
				<li>Select how you would like the data formatted. Most people choose "plain text."</li>
				<li>Click the "Give me my data" button.</li>
			</ol>

			<p>
				You can copy and paste information from Give Me My Data into any text editor. Here is a list of editors for
				Macintosh and Windows platforms:
			</p>

			<ul>
				<li><a href="http://docs.google.com/" target="_blank">Google Docs</a> (Mac and Win)</li>
				<li><a href="http://en.wikipedia.org/wiki/TextEdit" target="_blank">TextEdit</a> (Mac)</li>
				<li><a href="http://en.wikipedia.org/wiki/Pages" target="_blank">Pages</a> (Mac)</li>
				<li><a href="http://notepad-plus.sourceforge.net/uk/site.htm" target="_blank">NotePad++</a> (Win)</li>
				<li><a href="http://en.wikipedia.org/wiki/Microsoft_Word" target="_blank">Microft Word</a> (Win)</li>
			</ul>

			<p>
				After you have copied and pasted your information into an editor you can do a number of things depending on the
				format you chose. All data formats allow you to examine the text and copy and paste the exact information you
				are trying to retrieve from Facebook.
			</p>

			<p>
				You can also save the text with a new extension to be able to open the file in other applications. For example,
				to view your CSV data just save the plain text file with the .csv extension and open it in any spreadsheet
				software like <a href="http://en.wikipedia.org/wiki/Numbers_(software)" target="_blank">Numbers</a> (Mac),
				<a href="http://en.wikipedia.org/wiki/Microsoft_Excel" target="_blank">Microsoft Excel</a>
				(Win) or <a href="http://en.wikipedia.org/wiki/OpenOffice.org" target="_blank">OpenOffice</a>, which is free and
				works on all operating systems.
			</p>

			<p>
				XML is a popular format for archiving and presenting data with other software. There are many free XML viewers
				available. For example you can view XML files with the <a href="http://www.mozilla.com/firefox/" target="_blank"
					>Firefox web browser</a
				>. Also, check out a list of
				<a
					href="http://manyeyes.alphaworks.ibm.com/manyeyes/page/Visualization_Options.html"
					target="_blank"
					title="Visualization Options">Visualization Options</a>
				for CSV and XML data on the <a href="http://many-eyes.com/" target="_blank">ManyEyes website</a>.
			</p>

			<p>
				<a class="gotoapp" href="http://apps.facebook.com/give_me_my_data/" target="_parent" title="Application"
					>Go to Application</a>
			</p>

			<h2>How can I get my groups, likes, links, etc. back onto my info page?</h2>
			<p>
				Give Me My Data is designed only to export a copy of your information <strong>from Facebook</strong> to allow you
				to access and manipulate your data yourself. Putting it back into Facebook is unfortunately a manual process.
			</p>

			<h2>Why do I have to allow Give Me My Data access to my information?</h2>
			<p>
				In order for Give Me My Data to work you need to give it permission to access your information. Click "Allow"
				when you encounter this screen to start reclaiming your data. Give Me My Data only requests read access and will
				not write to your profile without your permission.
			</p>
			<p><img src="assets/img/allow_access_dialog.png" alt="allow access dialog" /></p>

			<h2>This app does not work, it did not _________________.</h2>
			<p>
				The primary goal in creating Give Me My Data is to give users agency over their data by allowing them to export
				and manipulate it regardless (and in spite if you like) of the interfaces we are presented.
			</p>

			<h2>Can I get live data or incoming messages, shares, etc. realtime?</h2>
			<p>Give Me my Data is only available as a web browser-based application.</p>


            <h2>What is your Privacy Policy</h2>
	
            <p>Give Me My Data respects your privacy and therefore does not save any information about you or your friends in any form. In addition to the <a href="http://www.facebook.com/terms.php" target="_blank">Statement of Rights and Responsibilities</a>, required for anyone who uses Facebook, applications and developers are bound by the <a href="http://developers.facebook.com/policy/" target="_blank">Facebook Developer Principles &amp; Policies</a></p>
        



			<h2>What data formats are available?</h2>

			<p>
				A file format is a particular way that information is encoded for storage in a computer file. The file extension
				indicates the type of file format as well as the application may open the file.
			</p>

			<div class="table-wrapper">
				<table class="table table-hover table-bordered">
					<tr>
						<th class="ext">extension</th>
						<th class="name">name</th>
						<th>description</th>
					</tr>

					<tr>
						<td class="ext"
							><a href="http://en.wikipedia.org/wiki/Plain_text" target="_blank" title="plain text">TXT</a></td>
						<td><a href="http://en.wikipedia.org/wiki/Plain_text" target="_blank" title="plain text">plain text</a></td>
						<td>Text that contains no visual formatting.</td>
					</tr>

					<tr>
						<td class="ext"
							><a href="http://en.wikipedia.org/wiki/Comma-separated_values" target="_blank" title="CSV">CSV</a></td>
						<td
							><a href="http://en.wikipedia.org/wiki/Comma-separated_values" target="_blank" title="CSV"
								>Comma-Separated Values</a
							></td>
						<td
							>Used for the digital storage of tabular data such as a database or spreadsheet. Each line in the CSV file
							corresponds to a row in the table. CSV files can be opened in any spreadsheet application like Microsoft
							Excel or Apple Numbers.</td>
					</tr>

					<tr>
						<td class="ext"><a href="http://en.wikipedia.org/wiki/XML" target="_blank" title="XML">XML</a></td>
						<td
							><a href="http://en.wikipedia.org/wiki/XML" target="_blank" title="XML">Extensible Markup Language</a
							></td>
						<td>A plain text markup language for storing and transporting data.</td>
					</tr>

					<tr>
						<td class="ext"><a href="http://en.wikipedia.org/wiki/JSON" target="_blank" title="JSON">JSON</a></td>
						<td
							><a href="http://en.wikipedia.org/wiki/JSON" target="_blank" title="JSON">JavaScript Object Notation</a
							></td>
						<td>A lightweight text-based open standard designed for human-readable data interchange.</td>
					</tr>

					<tr>
						<td class="ext"><a href="http://en.wikipedia.org/wiki/DOT_language" target="_blank" title="DOT">DOT</a></td>
						<td><a href="http://www.graphviz.org/" target="_blank" title="Graphviz">Graphviz DOT Language</a></td>
						<td
							>A plain text graph description language for use with <a
								href="http://www.graphviz.org/"
								target="_blank"
								title="Graphviz">Graphviz</a
							>.</td>
					</tr>

					<tr>
						<td class="ext"><a href="http://en.wikipedia.org/wiki/SQL" target="_blank" title="SQL">SQL</a></td>
						<td
							><a href="http://en.wikipedia.org/wiki/SQL" target="_blank" title="SQL">Structured Query Language</a></td>
						<td>A database computer language designed for managing data in relational database management systems.</td>
					</tr>

					<tr>
						<td class="ext"
							><a href="http://freemind.sourceforge.net/wiki/index.php/Main_Page" target="_blank" title="MM">MM</a></td>
						<td
							><a href="http://freemind.sourceforge.net/wiki/index.php/Main_Page" target="_blank" title="MM">FreeMind</a
							></td>
						<td
							>An XML-based language used by <a
								href="http://freemind.sourceforge.net/wiki/index.php/Main_Page"
								target="_blank"
								title="MM">FreeMind</a> mind mapping software.</td>
					</tr>

					<tr>
						<td class="ext"><a href="http://nodebox.net" target="_blank" title="NodeBox">PY</a></td>
						<td><a href="http://nodebox.net" target="_blank" title="NodeBox">NodeBox</a></td>
						<td>A Python IDE for creating visualizations.</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<style>
	.table-wrapper {
		padding: 1.3rem 1rem;
		border-radius: 0.5rem;
		background: #eceff5;
	}
	table {
		padding: 10px;
		margin: 0;
		border: 0;
	}
	th {
		padding: 4px 5px 8px 5px;
		font-size: 85%;
		font-weight: normal;
		text-align: center;
	}

	td {
		border-top: 1px solid #fff;
		padding: 15px 5px;
	}
	td a {
		background-color: transparent !important;
	}
	.ext {
		width: 10px;
		text-align: left;
	}
	.name {
		width: 140px;
		text-align: left;
	}
</style>
