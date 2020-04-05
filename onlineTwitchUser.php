function get_online_TwitchUser($user_id){
$curl_h = curl_init('https://api.twitch.tv/helix/streams?user_id='.$user_id);
curl_setopt($curl_h, CURLOPT_HTTPHEADER,
array(
      'Accept: application/vnd.twitchtv.v5+json',
      'Client-id: ******************************'       	
      )
);
curl_setopt($curl_h, CURLOPT_RETURNTRANSFER, true);
$jd_curl = json_decode(curl_exec($curl_h), true);
$user_name = $jd_curl['data']['0']['user_name'];
if($jd_curl['data'] != $jd_curl['data']['0']){
	echo $user_name.' is online';
 }
}

get_online_TwitchUser('162509222'); // change to the twitch user id that you're looking for...
