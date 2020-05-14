<?php


function sent_line_pushjson($message, $tokenkey)
{
    curl -X POST \
    https://api.line.me/v2/bot/message/push \
    -H 'Authorization: Bearer 02dKuXg/pAqJaw5qw1iTgQ+KW35A469PaU6ICHUVdASbiKHIFFB1kLnz64FtpVKFMowKGr9KH3ydzI94KvbYlhdm+P+Bt6gSTuqWUNPGu0g2LSHKuc09VcF8oiFDrz24J5klyQoSGsOR/fbidRa1UgdB04t89/1O/w1cDnyilFU=' \
    -H 'Content-Type: application/json' \
    -d '{
      "messages": [
          {
              "type": "text",
              "text": "Hello, world1"
          },
          {
              "type": "text",
              "text": "Hello, world2"
          }
      ]
  }'
}
$tokenkey = $_POST['tokenkey'];
// $secretkey = $_POST['secretkey'];
// $userId = $_POST['userId'];
$mesg = $_POST['mesg'];

$message =  $mesg;
echo sent_line_pushjson($message, $tokenkey);
?>