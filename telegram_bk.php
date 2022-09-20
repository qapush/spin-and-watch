<?php

/* https://api.telegram.org/bot1771605114:AAH84uS2WFa8JqS7wW-UVyo8P_blVahLTD0/getUpdates,
где, 1771605114:AAH84uS2WFa8JqS7wW-UVyo8P_blVahLTD0 - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone']; 
$token = "5529008518:AAHgILFOOroduYsXMTobcxc_AVVDYIRYuYs";
$chat_id = "-630554380";
$arr = array(
    'Имя пользователя: ' => $name,
    'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    header('Location: thanks.html');
} else {
    echo "Error";
}
?>