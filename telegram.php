<?php
/* https://api.telegram.org/bot1771605114:AAH84uS2WFa8JqS7wW-UVyo8P_blVahLTD0/getUpdates,
где, 1771605114:AAH84uS2WFa8JqS7wW-UVyo8P_blVahLTD0 - токен вашего бота, полученный ранее */

$txt = '';

$name = $_POST['user_name'];
$phone = $_POST['user_phone']; 
$email = $_POST['user_email']; 
$message = $_POST['user_message'];
$captcha = filter_input(INPUT_POST, 'g-recaptcha-response', FILTER_SANITIZE_STRING);
$token = "5542373349:AAFQsT9vZwWA7bE-Xttmpw0IGyyfbqq7fhw";
$chat_id = "-715163868";
$arr = array(
    'Name: ' => $name,
    'Phone: ' => $phone,
    'Email: ' => $email,
    'Message: ' => $message,
);
foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ". htmlspecialchars($value) . "&#10;";
}; 

$msg = urlencode($txt);
// echo $txt;
// echo $captcha;
// echo 'asdasd';

$secretKey = "6LfBwiYkAAAAAKwYHN9DNzK_CSfnVrq-MZwcHsw5";

// post request to server
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array('secret' => $secretKey, 'response' => $captcha);

$options = array(
  'http' => array(
    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
    'method'  => 'POST',
    'content' => http_build_query($data)
  )
);
$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$responseKeys = json_decode($response,true);


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$msg}","r");

if ($sendToTelegram && $responseKeys["success"]) {
       echo json_encode(array("Status"=>"Success"));
    } else {
        echo json_encode(array("Status"=>"Failure"));
}
