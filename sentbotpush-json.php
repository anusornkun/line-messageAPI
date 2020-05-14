<?php
$tokenkey = $_POST['tokenkey'];
// $secretkey = $_POST['secretkey'];
// $userId = $_POST['userId'];
$mesg = $_POST['mesg'];

$message =  $mesg;

function sent_line_pushjson($message, $tokenkey)
{
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, "https://api.line.me/v2/bot/message/push");
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, "message=$message");
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
$headers = array( "Content-type: application/json", "Authorization: Bearer $tokenkey", );
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec( $ch );
curl_close( $ch );
return $result;
}

echo sent_line_pushjson($message, $tokenkey);
?>