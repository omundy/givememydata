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


// publish to the user's wall
function publish()
{	
	var attachment = {
		'name': 'Give Me My Data',
		'href': 'http://apps.facebook.com/give_me_my_data/',
		'caption': 'Give Me My Data helps you reclaim and reuse your Facebook data.',
		'properties': {
			'link': { 'text': 'http://givememydata.com', 'href': 'http://givememydata.com'}//,
		},
	
		'media': [{'type':'image',
			 'src':'http://givememydata.com/assets/images/gmmd_Icon_475w.png',
			 'href':'http://apps.facebook.com/give_me_my_data/'}]};
		
	FB.Connect.streamPublish('', attachment, null);
}

// bookmark
function bookmark(){
	FB.Connect.showBookmarkDialog();
}

