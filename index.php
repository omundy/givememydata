<?php 


/* GLOBAL FUNCTIONS AND TIME_TRACKER
....................................................................................................*/

if (require_once('inc/functions/global.php')); 	// global functions
$start_time = time_tracker(NULL); 				// track response time


/* LOGIN / AUTHENTICATE / CREATE FB OBJECT
....................................................................................................*/

require_once('inc/fb_config.php');			// require fb config details
require_once('fb/facebook-php-sdk/src/facebook.php'); 	// include SDK

// create application instance
$facebook = new Facebook(array(
  'appId'  => $fbconfig['appid'],
  'secret' => $fbconfig['secret'],
  'cookie' => true,
));



// scope: Regular permissions
// reference: https://developers.facebook.com/docs/reference/fql/permissions/
$scope = "user_about_me, user_activities, user_birthday, user_education_history, user_groups, user_hometown, user_interests, user_likes, user_location, user_questions, user_relationships, user_relationship_details, user_religion_politics, user_subscriptions, user_website, user_work_history, user_checkins, user_events, user_games_activity, user_notes, user_photos, user_status, user_videos, friends_about_me, friends_activities, friends_birthday, friends_education_history, friends_groups, friends_hometown, friends_interests, friends_likes, friends_location, friends_questions, friends_relationships, friends_relationship_details, friends_religion_politics, friends_subscriptions, friends_website, friends_work_history, friends_checkins, friends_events, friends_games_activity, friends_notes, friends_photos, friends_status, friends_videos";

// scope: Extended Permissions:
$scope .= ", user_online_presence, friends_online_presence, read_mailbox, read_stream, export_stream, read_friendlists, manage_notifications, read_insights";

/** permissions we don't need

	email - users' primary email address
	xmpp_login - login users to chat
	publish_actions - permission to post
	publish_stream - publish on users' behalf
	rsvp_event - rsvp for a user
	manage_friendlists - create and manage users' friendslist
	create_event - create/modify events for user
	manage_pages - manage users' pages
	ads_management - manage ads (assuming regular ppl don't have any)
	offline_access - duh
	video_upload
	status_update - update user status

*/

//$loginUrl = "https://www.facebook.com/dialog/oauth?client_id=".$fbconfig['appid']
//				."&redirect_uri=".$fbconfig['canvas_page']."&scope=".$scope;


// make login url
// ref: https://developers.facebook.com/docs/reference/php/facebook-getLoginUrl/
$params = array(
	'scope' => $scope,
	'redirect_uri' => $fbconfig['canvas_page']
);
$loginUrl = $facebook->getLoginUrl($params);


// authenticate user
$uid = null;
$uid = $facebook->getUser();

// if no user
if (!$uid) {
	// forward the parent window to the authorization url so user can authenticate or login
	echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";
	exit;
} else {
	try {
		// $uid exists so proceed
		$timezone = profile_timezone_function ($uid);	// get timezone
		$permissions = $facebook->api('me/permissions');// the permissions granted, handy for checking later




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


?><!DOCTYPE html>
<html lang="en-us" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta charset="utf-8">
<title>Give Me My Data | A Facebook application to reclaim your information</title>
<meta name="description" content="Give Me My Data helps you reclaim and reuse your Facebook data">
<meta name="keywords" content="Owen Mundy, Give Me My Data, art, code, software, Facebook, fb, app, application, privacy, data, access, export">

<style type="text/css" media="all">@import url(inc/css/styles.css);</style>
<?php /*<!--<script type="text/javascript" src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php"></script>-->
<!--<script type="text/javascript"> FB.init("<?php print $app_id; ?>","fb/xd_receiver.htm"); </script>--> */?>
<script language='javascript' type='text/javascript'>
var data_type_arr = new Array();
var data_types = {
<?php
	// JS info for dropdowns
	foreach($data_type_arr as $key => $value){
		//print "data_type_arr['$key'] = ['". $value[0] ."','". $value[1] ."','". $value[2] ."'];\n";
		print "'$key':{'title':'".$value[0] ."','slug':'". $value[1] ."','types':'". $value[2] ."'},\n";
	}
	
	// onload="data_selector_call(my_form.data_selector.value)"
?>
};
</script>
<script type="text/javascript" src="inc/js/fb_functions.js"></script>
<script type="text/javascript" src="inc/js/forms.js"></script>
</head>

<body>









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
		
		
<?php

$selector = '';

if (isset($data_type_arr)) {
	
	$selector .= '<option value="*" id="default" disabled="disabled"'. $selected_format['default'];
	$selector .= '> -- Select a Data Type -- </option>';
	
	foreach($data_type_arr as $key => $value) {
		
		$selector .= "<option id='$key' value='$key'". $selected_data[$key];
		// disable section breaks and in-progress data_types
		$disabled = '';
		if (strstr($key,'***') || strstr($value[0],'***')) { 
			$selector .= ' disabled="disabled"'; 
		}
		$selector .= ">". $value[0] ."</option>\n";
		// not sure what this is for
		//$js_data_type_arr .= "data_type_arr['$key'] = ['". $value[0] ."','". $value[1] ."','". $value[2] ."'];\n";
	}
} else {
	$selector .= "<option>hello</option>";	
}

?>
		
		<select name="data_selector" onChange="data_selector_call(this.value)" >
		<?php print $selector; ?></select>
		
		
		
		
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
			<option id="data_format_graphml" value="graphml" <?php echo $selected_format['graphml']?>>GraphML (network)</option>
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
		error_log($e);
		$uid = null;
		echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";
		exit;
	}
}

function test($data){
	echo '<pre>';
	print_r($data);
	echo '</pre>';
	exit;
}

?>