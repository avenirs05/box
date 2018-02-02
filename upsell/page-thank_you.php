<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="format-detection" content="telephone=no">
    
    <title>Спасибо за обращение!</title>  

    <title>Magic Track - гибкая и яркая гоночная трасса</title>
    <meta name="description" content="Гоночная трасса stunt track - это трасса любой формы, хит 2017 года, 56 деталей и машинка в комплекте!" />
    <meta name="keywords" content="игрушка трасса, гибкая трасса, игрушка для ребенка" />

    <!-- <link rel="shortcut icon" href="favicon.png" type="image/x-icon"> -->
    <link rel="icon" href="favicon.png" type="image/x-icon">
    
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/slick.css"> 

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,700i&amp;subset=cyrillic" rel="stylesheet">

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
$to = 'sergeymick@gmail.com';
$subject = "Заявка с сайта boxingking.ru";

//if (isset($_GET['submit-free-consult'])) {  
    $message = '<html><head><title></title></head><body>
                        <strong>Тема: заявка с сайта boxingking.ru</strong><br>' .
                        'Имя: ' . $_POST['custom_U7401'] . '<br>' .
                        'Телефон: ' . $_POST['custom_U7394'] . '<br></body></html>';    

    mail($to, $subject, $message, $headers);
    //exit();
//}

?>




<script type="text/javascript" src="js/slick.min.js"></script>   
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/youtube.js"></script>
</body>
</html>

