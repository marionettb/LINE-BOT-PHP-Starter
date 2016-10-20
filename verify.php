<?php
$access_token = '2T37u4hEQmZjHz/3u3Pb5W1qkA8jDYYEnB1R2pXvhMxajQXE8B8YG3DQeqtCfZal3TEGdPo3bsY5WwvzylbgxQXp9ZiapWXPS+1mwW0zT/4zEqWeYSC62/yBNpwWCnwFCskdDQX2CZ6uaL/RAfP1zQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
