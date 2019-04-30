 <?php
  

function send_LINE($msg){
 $access_token = 'oL6TEu6ftNJJWahP37HvB+dLvJZAnuj3FR7AoMHfr2ZVodvRxWesQsU7yFmJ6GdERgtLl5M+BM8C2ySzIAOa+3q68HOhhJBZHHTBt+Yb7TcmSPf35f5q7HXD2YzHOOwoFHDEruMRBId11xLEaNjJAAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'Userid' => 'U1f32ccffbff50b341569ebb4d105e24a',
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
