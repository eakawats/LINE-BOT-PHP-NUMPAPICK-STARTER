 <?php
  

function send_LINE($msg){
 $access_token = 'Zw7ySd1liYsxC91pY4b6mjCJxWjAX2tLh2ukn8by51Y6AKFpvoU6js5QfKu7HMUICkp65Bfyitna3EwtjLgdejDMEGeMarxuHSRkwEfmV3alfGfdAcPMpQX1Dew0K4ED5l8ai2+0mta1jCrpdU+T7wdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U2bd74eb0be75d00c39481888ef57a6cb',
        //'to' => 'eakawat_s',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
