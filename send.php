<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$message = $_POST['message'];

$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);

$fio = urldecode($fio);
$email = urldecode($email);
$message = urldecode($message);

$fio = trim($fio);
$email = trim($email);
$message = trim($message);

// Проверка, передаются ли данные 
echo $fio;
echo "<br>";
echo $email;
echo "<br>";
echo $message;

mail("pe4iva@gmail.com", "Заявка с сайта", "Имя: ".$fio.". E-mail: ".$email ,"From: pe4iva@gmail.com \r\n");

if (mail("pe4iva@gmail.com", "Заказ с сайта", "Имя: ".$fio.". E-mail: ".$email ,"From: pe4iva@gmail.com \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}

ini_set('display_errors','On');
error_reporting('E_ALL');
?>