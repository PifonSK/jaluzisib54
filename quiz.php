<?php
require 'PHPMailer/PHPMailerAutoload.php';
// Сообщение
$message = '';
$message = $message."тип помещения: <br>".$_POST['qw1'];
$message = $message."<br>тип жалюзи: <br>".$_POST['qw2'];
$message = $message."<br>тип жалюзи: <br>".$_POST['qw3'];
$message = $message."<br>количество оконных проемов: <br>".$_POST['Окна'];
if ($_POST['qw5-1-width']) $message = $message."<br>ширина 1: <br>".$_POST['qw5-1-width'];
if ($_POST['qw5-1-height']) $message = $message."<br>высота 1: <br>".$_POST['qw5-1-height'];
if ($_POST['qw5-2-width']) $message = $message."<br>ширина 2: <br>".$_POST['qw5-2-width'];
if ($_POST['qw5-2-height']) $message = $message."<br>высота 2: <br>".$_POST['qw5-2-height'];
if ($_POST['qw5-3-width']) $message = $message."<br>ширина 3: <br>".$_POST['qw5-3-width'];
if ($_POST['qw5-3-height']) $message = $message."<br>высота 3: <br>".$_POST['qw5-3-height'];
if ($_POST['qw5-4-width']) $message = $message."<br>ширина 3: <br>".$_POST['qw5-4-width'];
if ($_POST['qw5-4-height']) $message = $message."<br>высота 3: <br>".$_POST['qw5-4-height'];
if ($_POST['qw5-5-width']) $message = $message."<br>ширина 3: <br>".$_POST['qw5-5-width'];
if ($_POST['qw5-5-height']) $message = $message."<br>высота 3: <br>".$_POST['qw5-5-height'];
if ($_POST['qw5-6-width']) $message = $message."<br>ширина 3: <br>".$_POST['qw5-6-width'];
if ($_POST['qw5-6-height']) $message = $message."<br>высота 3: <br>".$_POST['qw5-6-height'];
if ($_POST['qw5-7-width']) $message = $message."<br>ширина 3: <br>".$_POST['qw5-7-width'];
if ($_POST['qw5-7-height']) $message = $message."<br>высота 3: <br>".$_POST['qw5-7-height'];
if ($_POST['qw5-8-width']) $message = $message."<br>ширина 3: <br>".$_POST['qw5-8-width'];
if ($_POST['qw5-8-height']) $message = $message."<br>высота 3: <br>".$_POST['qw5-8-height'];
if ($_POST['qw5-9-width']) $message = $message."<br>ширина 3: <br>".$_POST['qw5-9-width'];
if ($_POST['qw5-9-height']) $message = $message."<br>высота 3: <br>".$_POST['qw5-9-height'];
if ($_POST['qw5-10-width']) $message = $message."<br>ширина 3: <br>".$_POST['qw5-10-width'];
if ($_POST['qw5-10-height']) $message = $message."<br>высота 3: <br>".$_POST['qw5-10-height'];
if ($_POST['xz']) $message = $message."<br>не знает размеры, нужен замер специалиста";
$message = $message."<br>когда планирует установку: <br>".$_POST['qw6'];
$message = $message."<br>подарок: <br>".$_POST['qw7'];
$message = $message."<br>как удобнее получить результат: <br>".$_POST['qw8'];
$message = $message."<br>ТЕЛЕФОН: <br>".$_POST['phone'];

if ($_POST['utm_source']) $message = $message."<br><br>utm_source: ".$_POST['utm_source'];
if ($_POST['utm_medium']) $message = $message."<br>utm_medium: ".$_POST['utm_medium'];
if ($_POST['utm_campaign']) $message = $message."<br>utm_campaign: ".$_POST['utm_campaign'];
if ($_POST['utm_content']) $message = $message."<br>utm_content: ".$_POST['utm_content'];
if ($_POST['utm_term']) $message = $message."<br>utm_term: ".$_POST['utm_term'];

$message = wordwrap($message, 70, "<br>");
echo $message;
$title = 'Новая заявка от '.$_POST['phone'];

$mail = new PHPMailer;
$mail->isSMTP();                              // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';               // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                       // Enable SMTP authentication
$mail->Username = 'reservesmtp@caaat.pro';                // SMTP username
$mail->Password = 'HU3Vf2GgonQ7Du9si';             // SMTP password
$mail->SMTPSecure = 'ssl';                    // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;

$mail->CharSet = "utf-8";

$mail->setFrom('reservesmtp@caaat.pro', 'jaluzisib54.ru');
$mail->isHTML(true);

$mail->addAddress('Jaluzisib54@yandex.ru', 'My Friend');

$mail->Subject = $title;
$mail->Body = $message;

//if (!$mail->send()) {
//    echo 'Ошибка при отправке. Ошибка: ' . $mail->ErrorInfo;
//} else {
//    echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в
//      ближайшее время<Br> $back";
//}
?>
