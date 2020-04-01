<?php 
error_reporting(0);

$sendto   = "support@xn--c1ajbh3as9a.xn--p1ai"; // почта, на которую будет приходить письмо
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['telephone']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usermail = $_POST['email']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$userformat = $_POST['format'];
$usersvyaz = $_POST['svyaz'];
$napravlenie = $_POST['napravlenie'];
 
// Формирование заголовка письма
$subject  = "Новое сообщение";
//$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers  = "From: support@igrushki\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
 
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";
$msg .= "<p><strong>Покупатель или продавец:</strong> ".$napravlenie."</p>\r\n";
$msg .= "<p><strong>Формат торговли (если продавец):</strong> ".$userformat."</p>\r\n";
$msg .= "<p><strong>Способ связи:</strong> ".$usersvyaz."</p>\r\n";
$msg .= "</body></html>";
?> 


<html>
<head>
<title>Агрегатор детских товаров</title>
    <!-- For-Mobile-Apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- //For-Mobile-Apps -->

    <!-- Style -->
        <link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/style.css?v_1.3" type="text/css"/>
    <!-- //Style -->

    <!-- Fonts 
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>-->
    <!-- Fonts -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135539882-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135539882-1');
</script>

</head>
<!-- //Head -->

<!-- Body -->
<body>

	<div class="container">
        <h1>ПЕРВЫЙ В РОССИИ</BR>МАРКЕТПЛЕЙС ДЕТСКИХ ИГРУШЕК,</BR>ТОВАРОВ И УСЛУГ</h1>
    </div>
	
	<div class="wrapper">
		<div id="second_block">
		<?php 
		// отправка сообщения
		if(@mail($sendto, $subject, $msg, $headers)) {
			echo "Ваша заявка на сотрудничество принята.<br>Менеджер команды Игрушки.рф с вами свяжется.";
		} else {
			echo "Возникла ошибка при отправке сообщения попробуйте зайти позже";
		}
		?>
		</div>
	</div>



</body>