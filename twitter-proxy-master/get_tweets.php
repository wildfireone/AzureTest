<?php

require_once('twitter_proxy.php');

// Twitter OAuth Config options
$oauth_access_token = '14812487-6rIZpOfDmMBGFybfd26Cpe86kGw64MLGaZLaimuFN';
$oauth_access_token_secret = 'efrJVLugBwFeAVnWSx1Cx6Z8N8IJlSB3js7XjW4KUYiuc';
$consumer_key = 'uXl8060AfB6TtVZOjUPbPqiuU';
$consumer_secret = 'qWYtc0c6wskWp9OvP63LcFTxnGexfhCjLAfN7gKgcwW7zfcSdv';
$user_id = '14812487';
$screen_name = 'wildfireone';
$count = 5;

if(isset($_GET['count'])){
	$count = $_GET['count'];
}
if(isset($_GET['name'])){
	$screen_name = $_GET['name'];
}
if(isset($_GET['id'])){
	$$user_id = $_GET['id'];
}


$twitter_url = 'statuses/user_timeline.json';
$twitter_url .= '?user_id=' . $user_id;
$twitter_url .= '&screen_name=' . $screen_name;
$twitter_url .= '&count=' . $count;

// Create a Twitter Proxy object from our twitter_proxy.php class
$twitter_proxy = new TwitterProxy(
	$oauth_access_token,			// 'Access token' on https://apps.twitter.com
	$oauth_access_token_secret,		// 'Access token secret' on https://apps.twitter.com
	$consumer_key,					// 'API key' on https://apps.twitter.com
	$consumer_secret				// 'API secret' on https://apps.twitter.com
);

// Invoke the get method to retrieve results via a cURL request
$tweets = $twitter_proxy->get($twitter_url);
echo $tweets;

?>