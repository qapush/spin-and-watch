<?php
/* https://api.telegram.org/bot1771605114:AAH84uS2WFa8JqS7wW-UVyo8P_blVahLTD0/getUpdates,
где, 1771605114:AAH84uS2WFa8JqS7wW-UVyo8P_blVahLTD0 - токен вашего бота, полученный ранее */

$txt = '';

$name = $_POST['user_name'];
$phone = $_POST['user_phone']; 
$email = $_POST['user_email']; 
$message = $_POST['user_message'];
$token = "5542373349:AAFQsT9vZwWA7bE-Xttmpw0IGyyfbqq7fhw";
$chat_id = "-715163868";
$arr = array(
    'Name: ' => $name,
    'Phone: ' => $phone,
    'Email: ' => $email,
    'Message: ' => $message,
);
foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
}; 

// $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
$sendToTelegram = fopen("http://localhost:8888","r");




if ($sendToTelegram) {
       echo json_encode(array("Status"=>"Success"));
    } else {
        echo json_encode(array("Status"=>"Failure"));
    }
