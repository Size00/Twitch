function get_TwitchUser($username){
$curl_h = curl_init('https://api.twitch.tv/helix/users?login='.$username);
curl_setopt($curl_h, CURLOPT_HTTPHEADER,
 array('Accept: application/vnd.twitchtv.v5+json',
       'Client-id: *tqwon3********z2ux39a******p')); // create an accoount on twitch to get their clientID & OAuth key...
curl_setopt($curl_h, CURLOPT_RETURNTRANSFER, true);
$response = json_decode(curl_exec($curl_h), true);
$tID = $response['data']['0']['id'];
$tlogin = $response['data']['0']['login'];
echo 'Twitch ID - '. $tID .'</br> Username - '. $tlogin;
}
get_TwitchUser('garytheproducer'); // change username to whatever the hell you want...
