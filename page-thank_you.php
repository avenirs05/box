<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="format-detection" content="telephone=no">
    
    <title>Спасибо за обращение!</title>  





    <script>

    </script>

    <style>
        body {
          background-color: #fff;
        }
    </style>
</head>

<body>


    <div class="thank-you text-center">
        <span>Спасибо за обращение! С вами свяжутся в ближайшее время!</span><br>
        <span>Вернуться на <a href="/">Главную.</a></span>
    </div>


<?php 

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$to = 'jackweb365@gmail.com, sergeymick@gmail.com';
$subject = "Заявка с сайта boxingking.ru";

//if (isset($_GET['submit-free-consult'])) {  
    $message = '<html><head><title></title></head><body>
                        <strong>Тема: заявка с сайта boxingking.ru</strong><br>' .
                        'Имя: ' . $_POST['custom_U7401'] . '<br>' .
                        'Адрес доставки: ' . $_POST['custom_U7401'] . '<br>' .
                        'Телефон: ' . $_POST['custom_U7405'] . '<br></body></html>';    

    mail($to, $subject, $message, $headers);
    exit();
//}

?>


