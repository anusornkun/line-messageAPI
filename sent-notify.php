<?php
function sent_line_notify($message, $token)
{
    $headers = array( "Content-type: application/x-www-form-urlencoded", "Authorization: Bearer $token", "System-Type: PK" );

    $valueheader = implode(",",$headers);
$ch = curl_init();

curl_setopt( $ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, "message=$valueheader : $message");
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec( $ch );
curl_close( $ch );
return $result;
}
$mesg = $_POST['mesg'];
$message =  $mesg;
$tokenkey = $_POST['tokenkey'];
$token = $tokenkey;
echo sent_line_notify($message, $token);
?>