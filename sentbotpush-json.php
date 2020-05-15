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

$jsonMessageBuilder = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($message);
$response = $bot->pushMessage($pushID, $jsonMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
