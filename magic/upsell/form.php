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
$subject = "Заказ на Magic track7 за 1190 руб.";//Тема письма
$message = "Имя: $name\nТелефон: $phone";//Сообщение
mail ($to,$subject,$message, $header) or print "Не могу отправить письмо !!!";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title>Спецпредложение от нашего интернет-магазина, товары по супер цене! Скидки до 80%.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://static.best-gooods.ru/upsells/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://static.best-gooods.ru/upsells/favicon.ico" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,300italic,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link media="all" href="http://static.best-gooods.ru/upsells/css/main.css" rel="stylesheet" type="text/css"/>
    <link media="all" href="http://static.best-gooods.ru/upsells/css/hint.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://static.best-gooods.ru/upsells/js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="http://static.best-gooods.ru/upsells/js/init.js"></script>
<script type="text/javascript">
    window.onload = function() {
        yaCounter44394973.reachGoal('ORDER')
    }
</script>
    <script src="//static.best-gooods.ru/js/jquery.js" type="text/javascript"></script>
    <script src="//api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
    <script src="//static.best-gooods.ru/js/plugins.js" type="text/javascript"></script>
    <script src="//static.best-gooods.ru/js/detect.js" type="text/javascript"></script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '378892495884000');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=378892495884000&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
<script>
fbq('track', 'Lead', {
value: 1190.00,
currency: 'RUB'
});
</script>
<body class="man">
<div class="section block-1">
<div class="wrap"><img src="call-girl.png" alt="">
<div class="top-title"><h2>Спасибо, Ваш заказ принят!</h2><div>Наш оператор свяжется с вами в течение 30 минут</div><p>Юлия Анисимова, старший менеджер отдела продаж</p></div></div>
</div>
<div class="section block-2"><div class="wrap"><h1>Для всех новых клиентов у нас есть эксклюзивные предложения!</h1><p>Вы можете добавить эти товары с супер-скидками к&nbsp;заказу&nbsp;прямо&nbsp;сейчас:</p></div></div>
<div class="section block-3">
<div class="wrap">
<div class="tov-item tov-rate-1 clearfix"><span class="tov-item-sale">-25%</span>
<div class="tov-left-cont"><div class="tov-gal clearfix"><div class="tov-gal-big"><img src="ap1.jpg" class="image0" alt=""></div>
<div class="tov-gal-list"><span class="active animate" data-target=".image0"><img src="ap1.jpg" alt=""></span></div></div></div>
<div class="tov-info"><h3>Второй набор гоночной трассы Magic Track</h3><div class="tov-info-rate"></div>
<div class="tov-info-cost"><span class="old-cost">1190<small> р</small></span>
<span class="new-cost">790<small> р</small></span></div><p class="tov-info-text"><blockquote>
<ul>Огромный набор - содержит 220 деталей<br>
- Детали и машинки ярко светятся в темноте<br>
- Легко собрать свою собственную трассу за считанные секунды<br>
- Абсолютно безвреден и не содержит формальдегид<br>
- Новая игрушка-конструктор - хит 2017 года!<br>
</ul></blockquote></p>
<form action="form3.php" method="post">
  <input name="name" type="hidden" value="<?=$name?>">
  <input name="phone" type="hidden" value="<?=$phone?>">
  <input name="name777" type="hidden" value="Второй набор Magic Track за 790 руб.">
  <button style="cursor:pointer;outline:0;border:0;padding:0;font-size:0;line-height:0;margin:30px 0 0 0;" onclick="yaCounter44394973.reachGoal('ORDER2'); return true;"><a class="tov-button animate" style="margin-top:0px;" data-order="2092006" data-item="2401">Добавить к заказу</a></button>
</form>
</div></div>

<div class="tov-item tov-rate-1 clearfix"><span class="tov-item-sale">-50%</span>
<div class="tov-left-cont"><div class="tov-gal clearfix"><div class="tov-gal-big"><img src="ap2.jpg" class="image1" alt=""></div>
<div class="tov-gal-list"><span class="active animate" data-target=".image1"><img src="ap2.jpg" alt=""></span></div></div></div>
<div class="tov-info"><h3>Дополнительная машинка</h3><div class="tov-info-rate"></div>
<div class="tov-info-cost"><span class="old-cost">490<small> р</small></span>
<span class="new-cost">290<small> р</small></span></div><p class="tov-info-text"><blockquote>
<ul>Чем больше машинок, тем больше веселья!<br>
</ul></blockquote></p>
<form action="form3.php" method="post">
  <input name="name" type="hidden" value="<?=$name?>">
  <input name="phone" type="hidden" value="<?=$phone?>">
  <input name="name777" type="hidden" value="Дополнительная машинка за 290 руб.">
  <button style="cursor:pointer;outline:0;border:0;padding:0;font-size:0;line-height:0;margin:30px 0 0 0;" onclick="yaCounter44394973.reachGoal('ORDER3'); return true;"><a class="tov-button animate" style="margin-top:0px;" data-order="2092006" data-item="2401">Добавить к заказу</a></button>
</form>
</div></div>
</div>
<div style="margin:0 auto;text-align:center;">
<form action="form3.php" method="post">
  <input name="name" type="hidden" value="<?=$name?>">
  <input name="phone" type="hidden" value="<?=$phone?>">
  <input name="name777" type="hidden" value="Отказались от Upsell'а">
  <button style="cursor:pointer;outline:0;border:0;padding:0;font-size:0;line-height:0;margin:0px auto 30px auto;text-align:center;"><a class="tov-button animate" style="margin:0 auto;" data-order="2092006" data-item="2401">Нет, спасибо</a></button>
</form>
</div>	
</div>

<div class="section footer"><div class="wrap clearfix"><div class="left clearfix"><p><span>Дарим покупателям радость с 2009 года.</span></p></div>
<div class="right"><p>Copyright (c) 2017<br/>ОГРН 34582345720962</p></div></div></div>

</body>
</html>