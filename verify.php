<?php
//$access_token = 'qLip9omRdSnsaKFlsWmCCx9pdvAcRd1CGb6XfH/K3aKVgmHS4Eh/a35I8S1q8XVCZQVJUVIPa2B/c1ZJHfEyA8vUgqlUeIfqTkw607IKQ7yCasUHW34wj+CGzB6bOafYNDSGkh87GIr+Tns7fqFqVAdB04t89/1O/w1cDnyilFU=';
$access_token = 'Zw7ySd1liYsxC91pY4b6mjCJxWjAX2tLh2ukn8by51Y6AKFpvoU6js5QfKu7HMUICkp65Bfyitna3EwtjLgdejDMEGeMarxuHSRkwEfmV3alfGfdAcPMpQX1Dew0K4ED5l8ai2+0mta1jCrpdU+T7wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
