<?php
function sent_line_push($message, $token)


require "vendor/autoload.php";

$mesg = $_POST['mesg'];

$access_token = '02dKuXg/pAqJaw5qw1iTgQ+KW35A469PaU6ICHUVdASbiKHIFFB1kLnz64FtpVKFMowKGr9KH3ydzI94KvbYlhdm+P+Bt6gSTuqWUNPGu0g2LSHKuc09VcF8oiFDrz24J5klyQoSGsOR/fbidRa1UgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'a5b0bf20a231cb52c7d23bf2034b7a23';

$pushID = 'U25cc1c3fc1dd7462abb26f845ab76d7d';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('$mesg');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
