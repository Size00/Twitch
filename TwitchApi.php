$curl_h = curl_init('https://api.twitch.tv/helix/users?login=garytheproducer');
curl_setopt($curl_h, CURLOPT_HTTPHEADER,
    array(
	    'method' => "GET",
		'Accept: application/vnd.twitchtv.v5+json',
        'Client-id: 2tqwon3m8kil9hkz2ux39arm4izzkp',
        'Authorization: OAuth 4rxhv8auvdzo3xvwgffz6768exqwsa'	
    )
);
curl_setopt($curl_h, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl_h);
echo $response;
