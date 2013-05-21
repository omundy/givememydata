<?php


/**
 * Keeps track of all data types. Used by web form, Javascript, and core functions referenced by FQL.
 *
 * @params	[0] = name of data in UI,
 * 			[1] = node name of data for XML (a.k.a. singular name),
 * 			[2] = data formats allowed,
 * 			[3] = comments
 * @return	---
 * @author	Owen Mundy <owenmundy.com>
 */ 
$data_type_arr = array(
								  
	//'***1' 				=> array(' -- Select Data -- '),
		
	'checkins' 			=> array('Checkins','checkin','plain,csv,xml,json'),
	//'comments' 			=> array('Comments','comment','plain,csv,xml,json'),
	'connections' 		=> array('Connections','connection','plain,csv,xml,json'),
	'developer'	 		=> array('Developer (of)','app','plain,csv,xml,json'),
	'events' 			=> array('Events','event','plain,csv,xml,json'),
	'family' 			=> array('Family','family','plain,csv,xml,json'),
	
	'friends_contacts' => array('Friends (contacts)',
								'friend','plain,csv,xml,json',
								'It is not possible to export friend\'s email addresses. Still, this data may be useful for beginning a contact list.'),
	'friends_data' 		=> array('Friends (data)','friend','plain,csv,xml,json'),
	'friends_names' 	=> array('Friends (names)','friend','plain,csv,xml,json'),
	'friend_requests'	=> array('Friends (requests)','friend_request','plain,csv,xml,json'),
	
	
// groups	
	'groups' 			=> array('Groups','group','plain,csv,xml,json'),
	//'group_wall'		=> array('Group wall [in development]','update','plain,csv,xml,json'),
	'groups_members' 	=> array('Group members','groups_member','xml,json'),
	'groups_feed' 		=> array('Group feeds','groups_feed','xml,json'),
	
	
	'inbox' 			=> array('Inbox','inbox','plain,csv,xml,json'),
	
	'likes'				=> array('Likes','like','plain,csv,xml,json'),
	'links' 			=> array('Links','link','plain,csv,xml,json','Also see "Wall"'),
	
	'notes' 			=> array('Notes','note','plain,csv,xml,json'),
	'notifications' 	=> array('Notifications','notification','plain,csv,xml,json'),
	
	'pages_admin' 		=> array('Pages (admin)','page','plain,csv,xml,json'),
	'pages_fan' 		=> array('Pages (fan)','page','plain,csv,xml,json'),
	'page_milestone' 	=> array('Page (milestones) [in development]','page','plain,csv,xml,json'),
	
	'photos' 			=> array('Photos','photo','plain,csv,xml,json'),
	'photos_tagged' 	=> array('Photos tagged','photo_tagged','plain,csv,xml,json'),
	'photo_albums' 		=> array('Photo albums','photo_album','plain,csv,xml,json'),
	
	'pokes' 			=> array('Pokes (current)','pokes','plain,csv,xml,json'),
	//'pokes_archive' 	=> array('Pokes (archive)','pokes_archive','plain,csv,xml,json'),
	
	'user' 				=> array('Profile','me','plain,csv,xml,json'),
	'status_updates'	=> array('Status updates','update','plain,csv,xml,json','Also see "Wall"'),
	
// subscriptions	
	'subscribers'		=> array('Subscribers (to me)','subscriber','plain,csv,xml,json'),
	'subscriptions'		=> array('Subscriptions (mine)','subscription','plain,csv,xml,json'),
	
	
	'videos'			=> array('Videos','video','plain,csv,xml,json'),
	'videos_tagged'		=> array('Videos tagged','video_tagged','plain,csv,xml,json'),
	
	'wall'				=> array('Your wall (everything)','post','plain,csv,xml,json'),
	
	
	'***2' 				=> array(' -- Customized Data -- '),
	
	'friends_graph' 	=> array('Friends Network Graph','connection','plain,csv,xml,json,dot,nb,gdf'),
	'friends_mutual' 	=> array('Mutual Friends Network Graph','connection','plain,csv,xml,json,dot,nb,gdf'),

);






/**
 * A generic function that retrieves various FQL queries. 
 * Used by web form, Javascript, and core functions referenced by FQL.
 *
 * @params	int $uid FB user ID
 * 			string $data_type Matches key in $data_types_arr
 *			string $data_format Data format to return
 * @return	string
 * @author	Owen Mundy <owenmundy.com>
 */  
function return_data($uid,$data_type,$data_format)
{
	global $facebook;		// access facebook object
	global $data_type_arr; 	// access data_type information
	
	// all queries are stored in a separate file
	require_once('data_get_queries.php');
	
	// comments about the data_type 
	if ($comments = $data_type_arr[$data_type][3]);
	
	// is a separate function required
	if ($data_type == 'friends_mutual') {  
		return friends_mutual_function($uid, $data_type, $data_format, $comments); 
		
	} else if ($data_type == 'friends_graph') { return friends_graph_function($uid, $data_type, $data_format, $comments);
	} else if ($data_type == 'inbox') { return inbox_function($uid, $data_type, $data_format, $comments);
	} else if ($data_type == 'pokes') { return pokes_function($uid, $data_type, $data_format, $comments);
	} else if ($data_type == 'pokes_archive') { return pokes_archive_function($uid, $data_type, $data_format, $comments);
	} else if ($data_type == 'groups_members') { return groups_data_function($uid, $data_type, $data_format, $comments,'members');
	} else if ($data_type == 'groups_feed') { return groups_data_function($uid, $data_type, $data_format, $comments,'feed');
	} 
	else if ($data_type == 'xxxxx') { 
		return xxxxxxx($uid, $data_type, $data_format, $comments);
	}
	// or can we just run plain FQL?
	else
	{
		try{
			$param  =   array(
				'method'    => 'fql.query',
				'query'     => $fql[$data_type],
				'callback'  => ''
			);
			$fb_data = $facebook->api($param);
		}
		catch(Exception $o){
			/*
			echo "<pre>";
			d($o);
			echo "</pre>";
			*/
		}
	
		// if attempt to get data is successful...
		if($fb_data)
		{
			/*
			echo "<pre>";
			print_r($fb_data);
			echo "</pre>";
			*/
			
			// is the returned array the list we want... 
			if (is_array($fb_data) && $fb_data > 1)
			{
				$fb_data_out = $fb_data;
			}
			// or the array inside the first indexes?
			else if (is_array($fb_data[0]) && $fb_data[0] > 1)
			{
				$fb_data_out = $fb_data[0];
			}
			// determine output format
			if ($data_format == "plain") { return array2plain($fb_data_out, $comments); }  
			else if ($data_format == "csv") { return array2csv($fb_data_out, $comments); } 
			else if ($data_format == "xml") { return array2xml($fb_data_out,$data_type,$data_type_arr[$data_type][1], $comments); } 
			else if ($data_format == "json") { return array2json($fb_data_out, $comments); } 
			else { return "This data cannot be returned in that format."; }
		}
		else
		{
			// maybe use graph API?
			//$fb_data = $facebook->api('/me/feed?access_token='.$session['access_token']);
			//print_r($o);
			return $o;
		}
	}
}







/* CUSTOM DATA
-------------------------------------------------------------------------------------------------------------- */


/**
 * Return all friends and put them into a network graph with user in the center
 *
 * @params	int $uid FB user ID
 * 			string $data_type Matches key in $data_types_arr
 *			string $data_format Data format to return
 * @return	string
 * @author	Owen Mundy <owenmundy.com>
 */  
function friends_graph_function($uid, $data_type, $data_format, $comments='')
{
	global $facebook;		// access facebook object
	global $data_type_arr; 	// access data_type information

	$data = array();	// declare the array before putting things in it
	
	// query
	$fql = "SELECT 
				uid, name
			FROM user 
			WHERE uid = me() 
			OR uid IN 
				(SELECT uid2 FROM friend WHERE uid1 = me())";
	
	// attempt to get data
	try{
		$param  =   array(
			'method'    => 'fql.query',
			'query'     => $fql,
			'callback'  => ''
		);
		$fql_friend_arrays = $facebook->api($param);
	}
	catch(Exception $o){
		//echo "<pre>";
		//d($o);
		//echo "</pre>";
	}
	
	if ($fql_friend_arrays)
	{
		$i = 0;
		foreach ($fql_friend_arrays as $friend_arr) 
		{
			// first index is me()
			if ($fql_friend_arrays[0]['name'] != $friend_arr['name'])
			{
				// for plain text and dot format
				$data_dot[] = '"'. $fql_friend_arrays[0]['name'] .'" -- "' . $friend_arr['name'] .'"';
				
				// 2d array
				$data[$i]['uid1'] = $fql_friend_arrays[0]['name'];
				$data[$i]['uid2'] = $friend_arr['name'];
				$i++;			
			}
		}
		
		// determine output format
		if ($data_format == "plain") { return array2plain($data_dot); } 
		else if ($data_format == "csv") { return array2csv($data); } 
		else if ($data_format == "xml") { return array2xml($data,'friend_list','friend'); } 
		else if ($data_format == "json") { return array2json($data); } 
		else if ($data_format == "dot") { return array2dot($data_dot,$data_type,$data_type_arr[$data_type][1]); } 
		else if ($data_format == "nb") { return array2nb($data); } 
		else if ($data_format == "gdf") { return array2gdf($data); } 
		else { return "This data cannot be returned in that format."; }
	}
	else
	{
		return "No data was found.";	
	}
}



/**
 * Return all friends and put them into a network graph, connecting everyone
 *
 * @params	int $uid FB user ID
 * 			string $data_type Matches key in $data_types_arr
 *			string $data_format Data format to return
 * @return	string
 * @author	Owen Mundy <owenmundy.com>
 */ 
function friends_mutual_function($uid, $data_type, $data_format, $comments='')
{
	global $facebook;		// access facebook object
	global $data_type_arr; 	// access data_type information

	$friends = array(); 					// my friends
	$all_connections = array(); 			// all links between friends
	$all_unique_connections = array();		// all links between (no duplicates)
	$all_unique_connections_names = array();// all links between friends with names instead of numbers
	$data = array();						// generic array for moving data
	$new_d_friends_data = "";			// for returning data
	
	// query
	$fql = "SELECT uid, name
			FROM user WHERE uid = me() 
			OR uid IN 
				(SELECT uid2 FROM friend WHERE uid1 = me())";
	
	// attempt to get data
	try{
		$param  =   array(
			'method'    => 'fql.query',
			'query'     => $fql,
			'callback'  => ''
		);
		$fql_friend_arrays = $facebook->api($param);
	}
	catch(Exception $o){
		//echo "<pre>";
		//d($o);
		//echo "</pre>";
	}
	
	
	
		
	// 1. Start by returning all friends data
	if ($fql_friend_arrays)
	{
		
		// 2. Loop through results
		foreach ($fql_friend_arrays as $friend_arr) 
		{
			// 2a. Make an array just for friend's UIDs
			$friends_uid_arr[] = $friend_arr['uid'];
			// 2b. Make reference array with friend's names
			$friends[ $friend_arr['uid'] ] = $friend_arr['name'];
		}
		// we will need a string of friend's UIDs later
		$friends_uid_list = implode(",",$friends_uid_arr);
		



		
	// 3. Chunk friends array and make smaller FQL query
		
		// divide the array into chunks
		$friends_uid_arr_chunks = array_chunk($friends_uid_arr, 100, TRUE);		
		
		// loop through each chunk string and make an FQL query
		foreach ($friends_uid_arr_chunks as $f_uid_chunk) 
		{
			
			
			// convert chunk to a string
			$f_uid_str = implode(",",$f_uid_chunk);
			
			/* 	
				// HOW IT WORKS
			
				SELECT uid1,uid2 FROM friend 	-> 	Select connections from friend table
				WHERE uid IN		
					($f_uid_str)				-> 	Match UID in the current chunk
				AND uid2 IN 
					($friends_uid_list)			-> 	To a UID in the entire group to see if there is a relationship.
			*/
		
			$fql = "SELECT uid1, uid2 FROM friend 
					WHERE uid1 IN 
						($f_uid_str)
					AND uid2 IN 
						($friends_uid_list)";
			
			try{
				$param  =   array(
					'method'    => 'fql.query',
					'query'     => $fql,
					'callback'  => ''
				);
				$all_connections_chunks = $facebook->api($param);
			}
			catch(Exception $o){
				//echo "<pre>";
				//d($o);
				//echo "</pre>";
			}



			if ($all_connections_chunks)
			{
				//print "<br>".++$c.": ".count($all_connections_chunks);	// what chunk are we on?
				
				// merge chunk into all_connections array
				$all_connections = array_merge($all_connections, $all_connections_chunks);
			}	
		}
	
	
	// 4. Clean the data
	
		foreach($all_connections as $relationship)
		{
			// sort the two UIDs in the relationship sub-array (to eliminate duplicates later)
			sort($relationship);
			// add relationship to this temp array as a string
			$all_connections_temp[] = implode(",",$relationship);
		}

		// remove duplicates
		$all_unique_connections = array_unique($all_connections_temp);
		
		
	// 5. Match names to UIDs and display clean data	
	
		$i = 0;
		foreach($all_unique_connections as $relationship)
		{
			$rel_arr = explode(",",$relationship);
			$uid1_name = $friends[$rel_arr[0]];
			$uid2_name = $friends[$rel_arr[1]];
			
			$data[$i]['uid1'] = $uid1_name;
			$data[$i]['uid2'] = $uid2_name;
			
			// for returning a string
			$data_csv[] = '"'. $uid1_name .' : '. $uid2_name .'"';
			$data_dot[] = '"'. $uid1_name .'" -- "'. $uid2_name .'"';
			
			//$new_d_friends_data .= $uid1_name ." -> ". $uid2_name ."\n";
			//$new_d_friends_data .= 'g.add_edge("' . $uid1_name .'","'. $uid2_name .'")'."\n";
			$i++;
		}
		
		/*
		// REPORTS (saving this in case it breaks again)
		print "
		<style> 
			table { border:1px solid #ccc; margin:20px; padding:5px; font:12px Verdana; }
			td { border-top:1px solid #ccc; padding:5px; }
			td.top { border:none }	
		</style>";
		print "<table>\n";
		print "<tr><td class='top'>Friends</td><td class='top'>".count($friends) ."</td></tr>\n";
		print "<tr><td>All connections</td><td>".count($all_connections) ."</td></tr>\n";
		print "<tr><td>Unique connections</td><td>".count($unique_connections) ."</td></tr>\n";
		print "<tr><td>All unique connections</td><td>".count($all_unique_connections) ."</td></tr>\n";
		print "<tr><td>data</td><td>".count($data) ."</td></tr>\n";
		print "<tr><td>data_csv</td><td>".count($data_csv) ."</td></tr>\n";
		print "<tr><td>data_dot</td><td>".count($data_dot) ."</td></tr>\n";
		print "</table>";
			
		//print_r($data_csv);
		
		//print "<p><b>".$data_format ."</b>";
	*/
		
		/**/
		// determine output format
		if ($data_format == "plain") { return array2plain($data_dot); } 
		else if ($data_format == "csv") { return array2csv($data); } 
		else if ($data_format == "xml") { return array2xml($data,$data_type,$data_type_arr[$data_type][1]); } 
		else if ($data_format == "json") { return array2json($data); } 
		else if ($data_format == "dot") { return array2dot($data_dot); } 
		else if ($data_format == "nb") { return array2nb($data); } 
		else if ($data_format == "gdf") { return array2gdf($data); } 
		else { return "This data cannot be returned in that format."; }	
	}
	else
	{
		return "No data was found.";
	}
}






// INBOX
function inbox_function($uid, $data_type, $data_format, $comments='')
{
	global $facebook;		// access facebook object
	global $data_type_arr; 	// access data_type information
	$data = array();	// declare the array before putting things in it
	try{
		$uid = $facebook->getUser();
	    $fb_data_out = $facebook->api('/me/inbox');
	}
	catch(Exception $o){
		/*echo "<pre>";
		d($o);
		echo "</pre>"; */
	}

	// determine output format
	if ($data_format == "plain") { return array2plain($fb_data_out, $comments); }  
	else if ($data_format == "csv") { return array2csv($fb_data_out, $comments); } 
	else if ($data_format == "xml") { return array2xml($fb_data_out,$data_type,$data_type_arr[$data_type][1], $comments); } 
	else if ($data_format == "json") { return array2json($fb_data_out, $comments); } 
	else { return "This data cannot be returned in that format."; }
}



// POKES
function pokes_function($uid, $data_type, $data_format, $comments='')
{
	global $facebook;		// access facebook object
	global $data_type_arr; 	// access data_type information
	$data = array();	// declare the array before putting things in it
	try{
		$uid = $facebook->getUser();
	    $fb_data_out = $facebook->api('/me/pokes');
	}
	catch(Exception $o){
		/*
		echo "<pre>";
		d($o);
		echo "</pre>";
		*/
	}

	// determine output format
	if ($data_format == "plain") { return array2plain($fb_data_out, $comments); }  
	else if ($data_format == "csv") { return array2csv($fb_data_out, $comments); } 
	else if ($data_format == "xml") { return array2xml($fb_data_out,$data_type,$data_type_arr[$data_type][1], $comments); } 
	else if ($data_format == "json") { return array2json($fb_data_out, $comments); } 
	else { return "This data cannot be returned in that format."; }
}
function pokes_archive_function($uid, $data_type, $data_format, $comments='')
{
	global $facebook;		// access facebook object
	global $data_type_arr; 	// access data_type information
	$data = array();	// declare the array before putting things in it
	try{
		$uid = $facebook->getUser();
	    $fb_data_out = $facebook->api('/me/pokes?since=1151023233&amp;limit=25&amp;until=1351023044&amp;__previous=1');
		//var_dump($fb_data_out);
	}
	catch(Exception $o){
		/*
		echo "<pre>";
		d($o);
		echo "</pre>";
		*/
	}

	// determine output format
	if ($data_format == "plain") { return array2plain($fb_data_out, $comments); }  
	else if ($data_format == "csv") { return array2csv($fb_data_out, $comments); } 
	else if ($data_format == "xml") { return array2xml($fb_data_out,$data_type,$data_type_arr[$data_type][1], $comments); } 
	else if ($data_format == "json") { return array2json($fb_data_out, $comments); } 
	else { return "This data cannot be returned in that format."; }
}


// GROUP MEMBERS
function groups_data_function($uid, $data_type, $data_format, $comments='',$whatdata)
{
	global $facebook;		// access facebook object
	global $data_type_arr; 	// access data_type information
	$data = array();	// declare the array before putting things in it
	try{
		$uid = $facebook->getUser();
	    $fb_data_out = $facebook->api('/me/groups');
	}
	catch(Exception $o){
		/*echo "<pre>";
		d($o);
		echo "</pre>"; */
	}
	$group_ids = array();
	$data = $fb_data_out['data'];
	foreach ($data as $group){
		$group_ids[$group['name']] = $group['id'];	
	}
	//print "<pre>"; print_r($group_ids); print "</pre>"; 
	
	$fb_data_out = array();
	
	try{
		foreach ($group_ids as $group_name => $group_id){
			//$group_ids[] = $group['id'];
			$fb_data_out[$group_name] = $facebook->api("$group_id/$whatdata");
		}
	    
	}
	catch(Exception $o){
		/*echo "<pre>";
		d($o);
		echo "</pre>"; */
	}

	// determine output format
	if ($data_format == "plain") { return array2plain($fb_data_out, $comments); }  
	else if ($data_format == "csv") { return array2csv($fb_data_out, $comments); } 
	else if ($data_format == "xml") { return array2xml($fb_data_out,$data_type,$data_type_arr[$data_type][1], $comments); } 
	else if ($data_format == "json") { return array2json($fb_data_out, $comments); } 
	else { return "This data cannot be returned in that format."; }
}






/* STILL WORKING ON...
-------------------------------------------------------------------------------------------------------------- */





// this is just a template for new functions
function xxxxxxxxxx($uid, $data_type, $data_format, $comments='')
{
	global $facebook;		// access facebook object
	global $data_type_arr; 	// access data_type information

	$data = array();	// declare the array before putting things in it


// query
	$fql = "
			SELECT
				uid, status_id, time, source, message                          
			FROM status           
			WHERE uid = $uid  
			AND time > 0
			ORDER BY time DESC
			LIMIT 10000";
			
	// attempt to get data
	try{
		$param  =   array(
			'method'    => 'fql.query',
			'query'     => $fql,
			'callback'  => ''
		);
		$fb_data_out = $facebook->api($param);
	}
	catch(Exception $o){
		/*
		echo "<pre>";
		d($o);
		echo "</pre>";
		*/
	}

	// determine output format
	if ($data_format == "plain") { return array2plain($fb_data_out, $comments); }  
	else if ($data_format == "csv") { return array2csv($fb_data_out, $comments); } 
	else if ($data_format == "xml") { return array2xml($fb_data_out,$data_type,$data_type_arr[$data_type][1], $comments); } 
	else if ($data_format == "json") { return array2json($fb_data_out, $comments); } 
	else { return "This data cannot be returned in that format."; }

}








?>