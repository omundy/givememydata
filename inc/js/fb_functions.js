
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

