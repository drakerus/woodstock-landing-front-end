<?php

$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];


$message = "Имя: $name \nE-mail: $email \n ----------------- \nТелефон: $tel";


// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
$message = wordwrap($message, 70);

// Отправляем
mail('woodsk@mail.ru', 'Мой сайт', $message, "Content-type: text/plain; charset=utf-8");
?>