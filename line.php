 <?php
  

function send_LINE($msg){
 $access_token = 'JFLqQxIfcEz2Iz11WliFfs+XalMy0/xNA3kt/KXO/9HHYZzBb6Ddq5EOCFEP49sTv//00HAsQnCtAxZjDMRQnS/iIMczsdBbJrEhuNG/HFpiUBpl2CRq9t7z1AlHhkiJ3bHRPF6MWIBVD2aRuLlyqwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U9a7e2d411b55ab65cd69381b5f3b0296',
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
