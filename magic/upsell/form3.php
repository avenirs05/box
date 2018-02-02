<?php
session_start();
$name = $_SESSION['form_name'] = (isset($_POST['name']))? $_POST['name'] : $_SESSION['form_name'] ; 
$phone = $_SESSION['form_phone'] = (isset($_POST['phone']))? $_POST['phone'] : $_SESSION['form_phone'] ; 
$name777 = $_SESSION['form_name777'] = (isset($_POST['name777']))? $_POST['name777'] : $_SESSION['form_name777'] ; 

$to_name = 'Заказ';//Отправитель
$to = "sergeymickzakaz@yandex.ru";//Ваш E-mail

$header  = "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/plain; charset=utf-8\r\n";
$header .= "From: \"$to_name\" <no-reply@".$_SERVER['HTTP_HOST'].">\r\n";
$subject = "Заказ7 [UPSELL]";//Тема письма
$message = "UPSELL: $name777\n\nИмя: $name\nТелефон: $phone";//Сообщение
mail ($to,$subject,$message, $header) or print "Не могу отправить письмо !!!";

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Спасибо за заявку!</title>
<link rel="stylesheet" type="text/css" href="down.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
</head>
<body>
<div id="wrapper">
	<div class="title">
		<h1>Спасибо за заявку!</h1>
		<p>Мы свяжемся с Вами в ближайшее время</p>
	</div>
	<div class="bt">
		<a href="/">Вернуться на сайт</a>
	</div>
</div>
</body></html>