<?php

$short_token = "AQAn5nja3rK4og4jIGBgoj3WzjX68rtV2OerQUC7RZrJZQBzXWNpa1ATiQPhRBdJv2mOPZXpMVcGtcPq-lXjNKxNfd-YdI_F60EmjADwqjD63CPKbtdZSvS5-F3QLHZg4q1MkQ4oEJu1qJJ8LtxClDeAdPtVjx8IgqVKGHFqT0ZE5VlBcTuJ62U5FzDejYnR72kaS6w-aNYuwa5BFBtLh0f255Gh1rqJNhjgCkd3_TNZ2";
$client_secret = "0eaa2390ba097e8cdbfcd8785b7543d1";
$grant_type = "ig_exchange_token";

$url = "https://graph.instagram.com/access_token?grant_type=" . $grant_type . "&client_secret=" . $client_secret . "&access_token=" . $short_token;
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);

$result = json_decode(curl_exec($ch));
echo "Jay Ganesh";
print_r($result);
curl_close($ch);
