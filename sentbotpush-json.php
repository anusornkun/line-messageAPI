<?php


function sent_line_pushjson($message, $tokenkey)
{
CURL *hnd = curl_easy_init();

curl_easy_setopt(hnd, CURLOPT_CUSTOMREQUEST, "POST");
curl_easy_setopt(hnd, CURLOPT_URL, "https://api.line.me/v2/bot/message/push");

struct curl_slist *headers = NULL;
headers = curl_slist_append(headers, "Content-Type: application/json");
headers = curl_slist_append(headers, "Authorization: Bearer 02dKuXg/pAqJaw5qw1iTgQ+KW35A469PaU6ICHUVdASbiKHIFFB1kLnz64FtpVKFMowKGr9KH3ydzI94KvbYlhdm+P+Bt6gSTuqWUNPGu0g2LSHKuc09VcF8oiFDrz24J5klyQoSGsOR/fbidRa1UgdB04t89/1O/w1cDnyilFU=");
curl_easy_setopt(hnd, CURLOPT_HTTPHEADER, headers);

curl_easy_setopt(hnd, CURLOPT_POSTFIELDS, "{\n    \"messages\": [\n        {\n            \"type\": \"text\",\n            \"text\": \"Hello, world1\"\n        },\n        {\n            \"type\": \"text\",\n            \"text\": \"Hello, world2\"\n        }\n    ]\n}");

CURLcode ret = curl_easy_perform(hnd);
}
$tokenkey = $_POST['tokenkey'];
// $secretkey = $_POST['secretkey'];
// $userId = $_POST['userId'];
$mesg = $_POST['mesg'];

$message =  $mesg;
echo sent_line_pushjson($message, $tokenkey);
?>