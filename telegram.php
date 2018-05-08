<?php

/* https://api.telegram.org/bot450162241:AAG7_LX5HVYgK4kOYlNeZ2c84bN8ganr4RE/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$date = $_POST['user_date'];
$token = "450162241:AAG7_LX5HVYgK4kOYlNeZ2c84bN8ganr4RE";
$chat_id = "-313940277";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Дата заезда: ' => $date
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

if($name != "" && $phone != "" && $email != ""){
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
}else{
	echo 'Пожалуйста, зполните все поля! <a href="http://tvoyo.net.ua/form_telegram/index.html">Вернуться и заполнить заново</a>';
}
?>