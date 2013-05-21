<?php 

/* 
 * 	Copyright 2011 Owen Mundy 
 *
 *	This file is part of Give Me My Data.
 *
 *	Give Me My Data is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU General Public License as published by
 *	the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *	
 *	Give Me My Data is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU General Public License for more details.
 *	
 *	You should have received a copy of the GNU General Public License
 *	along with Give Me My Data.  If not, see <http://www.gnu.org/licenses/>.
 */ 
 
 
 
/* GLOBAL FUNCTIONS AND TIME_TRACKER
....................................................................................................*/

if (require_once('inc/functions/global.php')); 	// global functions
$start_time = time_tracker(NULL); 				// keep track of time


/* LOGIN / AUTHENTICATE / CREATE FB OBJECT
....................................................................................................*/

if (require_once('inc/fb_config.php'));			// require fb config details

// get SDK
try{ 
	include_once "fb/facebook-php-sdk/src/facebook.php"; 
}catch(Exception $o){
	echo '<pre>';
	print_r($o);
	echo '</pre>';
}
// create application instance
$facebook = new Facebook(array(
  'appId'  => $fbconfig['appid'],
  'secret' => $fbconfig['secret'],
  'cookie' => true,
));

// authenticate user
$uid = null;
$user = $facebook->getUser();

// scope
$scope = "read_stream,user_about_me,user_activities,user_birthday,user_checkins,user_education_history,user_events,user_groups,user_hometown, user_interests,user_likes,user_location,user_notes,user_online_presence,user_photo_video_tags,user_photos,user_relationships, user_relationship_details,user_religion_politics,user_status,user_videos,user_website,user_work_history,manage_notifications";
// TODO:
//,email,read_friendlists,read_insights,read_mailbox,read_requests,xmpp_login,ads_management";


$loginUrl = "https://www.facebook.com/dialog/oauth?client_id=".$fbconfig['appid']
			."&redirect_uri=".$fbconfig['canvas_page']."&scope=".$scope;

// if user
if (!$user) {
	// forward the parent window to the authorization url so they can authenticate or login
	echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";
	exit;
}
else {
	try {
		// $user exists so proceed
		$uid = $facebook->getUser();					// current logged-in user
		$timezone = profile_timezone_function ($uid);	// get timezone

	

/* LOAD FUNCTIONS / GET DATA
....................................................................................................*/
	
		require_once('inc/functions/data_get_fb.php'); 	// include get/convert functions
		require_once('inc/functions/data_convert.php'); 
	
		// GET/POST debug
		/*
		echo "<pre>";
		var_dump($_GET);
		var_dump($_POST);
		echo "</pre>";
		*/

		// showing selected entries in dropdown
		$selected_format['default'] = $selected_data['default'] = $selected = ' selected="selected" ';
		
		// format selector
		if ($data_format = $_POST['data_format']) 
		{ 
			$selected_format[$data_format] = $selected;	// show this format as selected
		}

		// data selector
		if ($data_selector = $_POST['data_selector']) 
		{
			$selected_data[$data_selector] = $selected;	// show this data as selected
			
			// get data
			$html_output = return_data($uid, $data_selector, $data_format);
			
			if (empty($html_output))
			{
				$html_output = "No data was returned.";
			}	
		}
		else
		{
			$html_output = "No data was selected.";
		}
	
		if (!$data_selector || !$data_format)
		{
			$html_output = 'Your data will appear in this box. Copy and paste it into a plain text document.';
		}


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Give Me My Data</title>
	<style type="text/css" media="all">@import url(inc/css/styles.css);</style>
	<script type="text/javascript" src="inc/js/forms.js"></script>
	<!--<script type="text/javascript" src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php"></script>-->
	<!--<script type="text/javascript"> FB.init("<?php print $app_id; ?>","fb/xd_receiver.htm"); </script>-->
	<script type="text/javascript" src="inc/js/fb_functions.js"></script>
	<script language='javascript' type='text/javascript'>
		var data_type_arr = {};
		<?php
			// JS info for dropdowns
			foreach($data_type_arr as $key => $value){
				print "data_type_arr['$key'] = ['". $value[0] ."','". $value[1] ."','". $value[2] ."'];\n";
			}
		?>
	</script>
</head>

<body onload="data_selector_call(my_form.data_selector.value)">









<!-- begin fb js sdk -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '206330625089', // App ID
      channelUrl : '//givememydata.com/app/inc/channel.php', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    // Additional initialization code here
  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
    
</script>
<!-- / fb js sdk -->








	
<div id="wrapper">

	<div id="header">
	
		<div id="header_img"><a href="http://www.facebook.com/givememydata" target="_parent" title="Learn about, share images, or provide feedback about Give Me My Data"><img src="/assets/images/gmmd_Icon_475w.png" alt="icon" border="0" style="max-width:50px" /></a></div>
		<h2>Give Me My Data</h2>
		
		<div class="fb-like" data-href="http://www.facebook.com/givememydata" data-send="true" data-layout="button_count" data-width="160" data-show-faces="false" data-font="lucida grande"></div>
		
		<div id="header_links">
			<div><a href="http://www.facebook.com/givememydata" target="_parent" title="Share comments and images, or provide feedback about Give Me My Data">Feedback</a></div>
			<div><a href="http://givememydata.com/#how_to_use" target="_blank" title="How To Use">How To...</a></div>
			<!--<a href="#" class="share share_a" title="Share" onclick="publish()">Share</a>
			<a href="#" onclick="bookmark()">Bookmark</a>-->
			
		</div>
	</div>	
	

	
	<p>Give Me My Data helps you reclaim and reuse your Facebook data. Select <a href="http://givememydata.com/#how_to_use" target="_blank" title="How To Use">data type</a> and <a href="http://givememydata.com/#about_data_formats" target="_blank" title="How To Use">format</a> below to get started.</p>
	
	<form method="POST" id="my_form" action="index.php">
	
		<input type="hidden" value="<?php print $_POST["signed_request"] ?>" name="signed_request" />
		
		
		
		
		<span>Data<sup><a href="http://givememydata.com/#about_data" target="_blank">1</a></sup></span>
		
		<select name="data_selector" onchange="data_selector_call(this.value)" >
		<?php
			if ($data_type_arr)
			{
				print '<option value="*" id="default" disabled="disabled"'. $selected_format['default'] .'> -- Select a Data Type -- </option>';
				foreach($data_type_arr as $key => $value)
				{
					$disabled = '';
					// disable section breaks and in-progress data_types
					if (strstr($key,'***') || strstr($value[0],'***'))
					{ 
						$disabled = ' disabled="disabled"'; 
					}
					print "<option id='$key' value='$key'". $selected_data[$key] ."$disabled>". $value[0] ."</option>\n";
					// for JS
					$js_data_type_arr .= "data_type_arr['$key'] = ['". $value[0] ."','". $value[1] ."','". $value[2] ."'];\n";
				}
			}
			else
			{
				print "<option>hello</option>";	
			}
		?>
		</select>
		
		
		
		
		<span>Format<sup><a href="http://givememydata.com/#about_data_formats" target="_blank">2</a></sup></span>
		
		<select name="data_format" id="data_format">
			<option value="*" id="default" disabled="disabled" <?php echo $selected_format['default']?>> -- Select a Format -- </option>
			<option id="data_format_plain" value="plain" <?php echo $selected_format['plain']?>>plain text</option>
			<option id="data_format_csv" value="csv" <?php echo $selected_format['csv']?>>CSV </option>
			<option id="data_format_xml" value="xml" <?php echo $selected_format['xml']?>>XML</option>
			<option id="data_format_json" value="json" <?php echo $selected_format['json']?>>JSON</option>
			<option id="data_format_dot" value="dot" <?php echo $selected_format['dot']?>>DOT (network)</option>
			<option id="data_format_nb" value="nb" <?php echo $selected_format['nb']?>>Nodebox/PY (network)</option>
			<option id="data_format_gdf" value="gdf" <?php echo $selected_format['gdf']?>>Guess/GDF (network)</option>
		</select>
	
		<input type="submit" class="button" name="submit" value="Give me my data" />

	</form>



	<div id="format_msg"></div>
	
	<textarea rows="30" id="html_output"><?php echo $html_output?></textarea>
	
	<div class="clear"></div>
	
	
	<p>Check back often for updates and additional data types. Feel free to provide feedback on the <a href="http://www.facebook.com/givememydata" target="_parent" title="application page">application page</a>, read the <a href="http://givememydata.com/#privacy_policy" target="_blank" title="Privacy Policy">Privacy Policy</a>, or look for <a href="http://givememydata.com/#help" target="_blank" title="Help">help</a> for your questions.</p>
	
	
	<div id="footer">
		
		<div class="footer_left">
			This page was created in <?php echo round(time_tracker($start_time), 5); ?> seconds.
		</div>			
			
		<div class="footer_right">
			Give Me My Data (c) 2009&ndash;<?php echo date('y') ?> <a href="http://owenmundy.com/site/give-me-my-data" target="_blank">Owen Mundy</a>
		</div>
		
	</div>


	
	
</div>

<?php include_once ('../assets/stats.php'); ?>

</body>
</html>

<?php

	} catch (FacebookApiException $e) {
		echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";
		exit;
	}
}

function d($d){
	echo '<pre>';
	print_r($d);
	echo '</pre>';
}

?>