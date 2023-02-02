<?php
/* https://api.telegram.org/bot1771605114:AAH84uS2WFa8JqS7wW-UVyo8P_blVahLTD0/getUpdates,
где, 1771605114:AAH84uS2WFa8JqS7wW-UVyo8P_blVahLTD0 - токен вашего бота, полученный ранее */


$mode = 'prod';

if($mode === 'dev') {
  $token = "6149169481:AAFA0g0FJdGeENMDKIcJLGGPDos3VCw8tUg";
  $chat_id = "-839273264";
} else if ($mode === 'prod'){
  $token = "5542373349:AAFQsT9vZwWA7bE-Xttmpw0IGyyfbqq7fhw";
  $chat_id = "-715163868";
}

$txt = '';
$name = $_POST['user_name'];
$phone = $_POST['user_phone']; 
$email = $_POST['user_email']; 
$message = $_POST['user_message'];
$captcha = filter_input(INPUT_POST, 'g-recaptcha-response', FILTER_SANITIZE_STRING);
$ip = $_SERVER["REMOTE_ADDR"];
$arr = array(
    'Name: ' => $name,
    'Phone: ' => $phone,
    'Email: ' => $email,
    'Message: ' => $message,
);
foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ". htmlspecialchars($value) . "&#10;";
}; 

// echo $txt;
// echo $captcha;
// echo 'asdasd';

$secretKey = "6LfBwiYkAAAAAKwYHN9DNzK_CSfnVrq-MZwcHsw5";

// post request to server
$url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$captcha.'&remoteip='.$ip;
$request = file_get_contents($url);
$response = json_decode($request, true);
$responseRaw = var_export($response, true);




$success = $response['success'];

if(isset($response['score'])){
  $score = $response['score'];
}


if(isset($response['error-codes'][0])) { 
  $error = isset($response['error-codes'][0]);
};

$spamNames = array('qapush');

$txt .= "&#10; ----------- &#10;";
$txt .= "<b>IP: </b> ". $ip . "&#10;";
if(isset($score)) { $txt .= "<b>Spam score (if available): </b> ". $score . "&#10;"; }
$txt .= "<b>Metadata: </b> ". $responseRaw . "&#10;";
$txt .= "<b>S: </b> ". $success . "&#10;";
$txt .= "<b>Typeof s: </b> ". gettype($success) . "&#10;";
if(isset($errorCodes)) { $txt .= "<b>Error code: </b> ". gettype($errorCodes) . "&#10;"; }
$msg = urlencode($txt);


// If name is spamNames or score is less than 0.5 -> send to qapush-bot
if ( $success && in_array($name, $spamNames) || $success && $score < 0.5) {

  
  $token = "6149169481:AAFA0g0FJdGeENMDKIcJLGGPDos3VCw8tUg";
  $chat_id = "-839273264";


  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$msg}score:{$score}","r");

  if($sendToTelegram){
    echo json_encode(array("status"=>"success", "spam" => "true"));
  } else {
    echo json_encode(array("status"=>"failure", "spam" => "true"));
  }


  // If not spamname and score greater than 0.5 -> send to chat
} else if ($success && $score > 0.5) {

  if($mode !== 'dev'){
    $token = "5542373349:AAFQsT9vZwWA7bE-Xttmpw0IGyyfbqq7fhw";
    $chat_id = "-715163868";
  }
  
  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$msg}","r");

  if($sendToTelegram){
    echo json_encode(array("status"=>"success", "spam" => "false"));
  } else {
      echo json_encode(array("status"=>"failure", "spam" => "false"));
  }
} else if (!$success){

  // If captcha failed

  $token = "6149169481:AAFA0g0FJdGeENMDKIcJLGGPDos3VCw8tUg";
  $chat_id = "-839273264";
  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text=spam_sent%0A%0A{$msg}","r");
  echo json_encode(array("status"=>"failure", "spam" => "true"));
}
