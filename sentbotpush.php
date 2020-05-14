<?php
$tokenkey = $_POST['tokenkey'];
$secretkey = $_POST['secretkey'];
$userId = $_POST['userId'];
$mesg = $_POST['mesg'];

$message =  $mesg;

require "vendor/autoload.php";


$access_token = $tokenkey;

$channelSecret = $secretkey;

$pushID = $userId;

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($message);
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
