<?php

/**
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









# BASIC USER DATA
##########################################################################################################

// user
	$fql['user'] = "
	
			SELECT 
				uid, first_name, middle_name, last_name, name, 
				pic_small, pic_big, pic_square, pic, 
				affiliations, profile_update_time, timezone, religion, birthday, birthday_date, sex, hometown_location, 
				meeting_sex, meeting_for, relationship_status, significant_other_id, political, current_location, activities, interests, is_app_user, 
				music, tv, movies, books, quotes, about_me, 
				hs_info, education_history, work_history, notes_count, wall_count, status, online_presence, locale, proxied_email, profile_url, email_hashes,
				pic_small_with_logo, pic_big_with_logo, pic_square_with_logo, pic_with_logo, 
				allowed_restrictions, verified, profile_blurb, family, username, website, is_blocked, contact_email, email, third_party_id	
			FROM user WHERE uid=$uid";
			
// status updates
	$fql['status_updates'] = "
									
			SELECT
				uid, status_id, time, source, message                          
			FROM status           
			WHERE uid = $uid  
			AND time > 0
			ORDER BY time DESC
			LIMIT 10000";	
		
// checkins
	$fql['checkins'] = "	
			SELECT 
				checkin_id, author_uid, target_id, app_id, post_id, coords, timestamp, tagged_uids, message
			FROM checkin 
			WHERE author_uid = $uid
			ORDER BY timestamp DESC 
			LIMIT 10000";
		
// links
	$fql['links'] = "	
			SELECT 
				link_id, owner, owner_comment, created_time, title, summary, url, image_urls
			FROM link 
			WHERE owner = $uid
			ORDER BY created_time DESC 
			LIMIT 10000";
		
// notes
	$fql['notes'] = "	
			SELECT 
				uid, note_id, created_time, updated_time, content, title
			FROM note
			WHERE uid = $uid
			ORDER BY created_time DESC 
			LIMIT 10000";	

// developer
	$fql['developer'] = "	
	
			SELECT 
				app_id, api_key, canvas_name, display_name, icon_url, logo_url, company_name, developers, description, daily_active_users, weekly_active_users, monthly_active_users, category, subcategory
			FROM application
			WHERE app_id 
			IN (SELECT developer_id, application_id FROM developer WHERE developer_id=$uid)";	
	
	

# PHOTOS / VIDEOS
##########################################################################################################

// photos
	$fql['photos'] = "
			SELECT 
				pid, aid, owner, 
				src_small, src_small_height, src_small_width, 
				src_big, src_big_height, src_big_width,
				src, src_height, src_width, link, caption, created, modified, object_id
			FROM photo 
			WHERE aid IN 
				(SELECT aid FROM album WHERE owner = $uid) 
			ORDER BY created DESC 
			LIMIT 10000";
			
// photo tags		
	$fql['photos_tagged'] = "
			SELECT 
				pid, aid, owner, 
				src_small, src_small_height, src_small_width, 
				src_big, src_big_height, src_big_width,
				src, src_height, src_width, link, caption, created, modified, object_id
			FROM photo 
			WHERE pid IN 
				(SELECT pid FROM photo_tag WHERE subject=$uid)
			ORDER BY created DESC 
			LIMIT 10000";
	
// photo albums		
	$fql['photo_albums'] = "
			SELECT
				aid, owner, cover_pid, name, created, modified, description, location, size, link, visible, 
				modified_major, edit_link, type, object_id, can_upload
			FROM album
			WHERE owner = $uid
			ORDER BY created DESC 
			LIMIT 10000";
	
// videos
	$fql['videos'] = "	
			SELECT 
				vid, owner, title, description, thumbnail_link, embed_html, updated_time, created_time, src, src_hq
			FROM video
			WHERE owner = $uid
			ORDER BY created_time DESC 
			LIMIT 10000";
			
// videos_tagged
	$fql['videos_tagged'] = "	
			SELECT 
				vid, owner, title, description, thumbnail_link, embed_html, updated_time, created_time, src, src_hq
			FROM video
			WHERE vid IN 
				(SELECT vid FROM video_tag WHERE subject=$uid)
			ORDER BY created_time DESC 
			LIMIT 10000";		
	
	
# PAGES / GROUPS / NOTIFICATIONS / EVENTS
##########################################################################################################

// pages (admin of)
	$fql['pages_admin'] = "	
			SELECT 
				page_id, name, pic_small, pic_big, pic_square, pic, pic_large, page_url, fan_count, type, website, 
				has_added_app, founded, company_overview, mission, products, location, parking, public_transit, hours
			FROM page
			WHERE page_id IN 
				(SELECT uid, page_id, type FROM page_admin WHERE uid=$uid)
			ORDER BY founded DESC 
			LIMIT 10000";
	
// pages (fan of)
	$fql['pages_fan'] = "	
			SELECT 
				page_id, name, pic_small, pic_big, pic_square, pic, pic_large, page_url, fan_count, type, website, 
				has_added_app, founded, company_overview, mission, products, location, parking, public_transit, hours
			FROM page
			WHERE page_id IN 
				(SELECT uid, page_id, type, created_time FROM page_fan WHERE uid=$uid)
			ORDER BY founded DESC 
			LIMIT 4000";

// page_milestone
	$fql['page_milestone'] = "
			SELECT
				id, owner_id, title, description, created_time, updated_time, start_time, end_time
			FROM page_milestone
			WHERE owner_id IN 
				(SELECT uid, page_id, type FROM page_admin WHERE uid=$uid)

			ORDER BY created_time DESC
			LIMIT 10000";			
	
	
	
	
	
// groups
	$fql['groups'] = "	
			SELECT 
				gid, name, nid, pic_small, pic_big, pic, description, group_type, group_subtype, recent_news, creator, update_time, office, website, venue
			FROM group 
			WHERE gid IN 
				(SELECT uid, gid, positions FROM group_member WHERE uid=$uid)
			ORDER BY gid DESC 
			LIMIT 10000";	
	/*	 in development	
// group_wall
	$fql['group_wall'] = "
			SELECT 
			post_id, viewer_id, app_id, source_id, updated_time, created_time, filter_key, attribution, actor_id, target_id, message, app_data, action_links, attachment, impressions, comments, likes, privacy, permalink, xid, tagged_ids 
			FROM stream 
			
			WHERE source_id IN 
				(SELECT uid, gid, positions FROM group_member WHERE uid=$uid)
			LIMIT 10000";					
		*/		





// notifications
	$fql['notifications'] = "	
			SELECT 
				notification_id, sender_id, recipient_id, created_time, updated_time, title_html, title_text, body_html, body_text, href, 
				app_id, is_unread, is_hidden
			FROM notification 
			WHERE recipient_id = $uid
			ORDER BY created_time DESC 
			LIMIT 10000";			

// events	
	$fql['events'] = "	
		
			SELECT
				eid, name, pic_small, pic_big, pic_square, pic, 
				host, description, 
				start_time, end_time, creator, 
				update_time, location, venue, privacy,
				hide_guest_list, can_invite_friends, all_members_count, attending_count, unsure_count, declined_count, not_replied_count
			FROM event 
			WHERE eid 
			IN (SELECT eid FROM event_member WHERE uid = $uid AND start_time > 0) 
			ORDER BY start_time
			LIMIT 10000";
			
			
			
	
# FRIENDS & FAMILY
##########################################################################################################

// connections
	$fql['connections'] = "	
	
			SELECT 
				source_id, target_id, target_type, is_following, updated_time, is_deleted
			FROM connection 
			WHERE source_id = $uid";	
	
// friends_names
	$fql['friends_names'] = "	
	
			SELECT 
				uid, name
			FROM user 
			WHERE uid IN 
				(SELECT uid2 FROM friend WHERE uid1 = me())";
				
// friends_contact_info
	$fql['friends_contacts'] = "	
	
			SELECT 
				first_name, middle_name, last_name, email
			FROM user 
			WHERE uid IN 
				(SELECT uid2 FROM friend WHERE uid1 = me())";				
		
// friends_data
// - Retrieves almost everything here http://developers.facebook.com/docs/reference/fql/user/
// - BUT they (FB) randomly removed movies, then tv, then music, what's next?
	$fql['friends_data'] = "	
	
			SELECT 
				uid, first_name, middle_name, last_name, name, 
				pic_small, pic_big, pic_square, pic, 
				affiliations, profile_update_time, timezone, religion, birthday, birthday_date, sex, hometown_location, 
				meeting_sex, meeting_for, relationship_status, significant_other_id, political, current_location, activities, is_app_user, 
			
				locale, profile_url, website, contact_email, email
			FROM user 
			WHERE uid IN 
				(SELECT uid2 FROM friend WHERE uid1 = me())";		

// friend_requests
	$fql['friend_requests'] = "	
	
			SELECT uid_to, uid_from FROM friend_request WHERE uid_to = me()";

// family
	$fql['family'] = "	
	
			SELECT 
				uid, name
			FROM family 
			WHERE profile_id=$uid";
			
			
			




// subscribers
	$fql['subscribers'] = "	
	
			SELECT uid, name
			FROM user
			WHERE uid IN
				(SELECT subscriber_id from subscription where subscribed_id = me())";

// subscribed
	$fql['subscriptions'] = "	
	
			SELECT uid, name
			FROM user
			WHERE uid IN
				(SELECT subscribed_id from subscription where subscriber_id = me() )";










// the "Wall"
$fql['wall'] = "	

		SELECT 
			post_id, viewer_id, app_id, source_id, updated_time, created_time, filter_key, attribution, actor_id, target_id, message, app_data, action_links, attachment, impressions, comments, likes, privacy, permalink, xid, tagged_ids 
		FROM stream 
		WHERE source_id = me() 
		AND created_time > 0
		LIMIT 10000";
		
		




# FQL THAT IS IN-PROGRESS
##########################################################################################################

// likes
	// retrieves 95 fan pages
	$fql['likes'] = "	
						
			SELECT page_id,name
			FROM page
			WHERE page_id IN (
				SELECT page_id
				FROM page_fan
				WHERE uid=me()
			)";
	
		
		
		
// apps: what they can acess
// http://developers.facebook.com/docs/reference/fql/application/
	$fql['apps_canaccess'] = "	
		SELECT 
			app_id, api_key, canvas_name, display_name, icon_url, logo_url, company_name, developers, description, daily_active_users, weekly_active_users, monthly_active_users, category, subcategory
			
			
		FROM application 
		WHERE owner = $uid
		ORDER BY created DESC 
		LIMIT 10000";
		
		
		
		
// comments
	$fql['comments'] = "	
			SELECT 
				xid, object_id, post_id, fromid, time, text, id, username, reply_xid, post_fbid
			FROM comments 
			WHERE fromid = $uid
			ORDER BY time DESC 
			LIMIT 10000";
		
		
	// this is the old one
	$fql['comments'] = "	
		
		SELECT 
			post_id, actor_id, target_id, message 
		FROM stream 
		WHERE source_id in 
			(SELECT target_id FROM connection WHERE source_id=$uid) 		
		AND is_hidden = 0";


	
	

?>