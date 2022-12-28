<?php
$region_id = htmlspecialchars($_POST['region_id']);
$lokaz_id = htmlspecialchars($_POST['lokaz_id']);
$zona_id = htmlspecialchars($_POST['zona_id']);
$data = htmlspecialchars($_POST['data']);
$number = htmlspecialchars($_POST['number']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);
if ($region_id == ''  ||  $lokaz_id == ''  || $zona_id == '' || $data == '' || $number == '' || $email == '' ) {
    echo 'Заполнить все поля';
    exit;
}
//отправка
$subject = "=?utf-8?b?".base64_encode($subject)."?="; 
$headers = "From: $email\r\nReply-to: $email\r\n Регион: $region_id \r\n Локация: $lokaz_id \r\n Зона: $zona_id \r\n Дата: $data \r\n 
Кол-во человек: $number \r\n Content-type: text/html; charset=utf-8\r\n"; 
if (mail ("ekaterina.below@yandex.ru", $subject, $message, $headers))
echo "Сообщение отправлено";
else
echo "Сообщение не отправлено";
?>


