<?php
$to  = 'aidan@example.com';
$subject = 'Форма с лэндинга';
$message = 'Имя:' . $_POST['name'] . '<br />'.'Номер телефона' . $_POST['phone'];
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
//mail($to, $subject, $message, $headers);
header('Location: index.php');
?>