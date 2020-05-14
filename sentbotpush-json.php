<?php


function sent_line_pushjson($message, $tokenkey)
{
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, "https://api.line.me/v2/bot/message/push");
curl_setopt( $ch, CURLOPT_POSTFIELDS, "message=$message");
$headers = array( "Content-type: application/json", "Authorization: Bearer $tokenkey", );
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec( $ch );
curl_close( $ch );
return $result;
}
$tokenkey = $_POST['tokenkey'];
// $secretkey = $_POST['secretkey'];
// $userId = $_POST['userId'];
$mesg = $_POST['mesg'];

$message =  $mesg;
echo sent_line_pushjson($message, $tokenkey);
?>