<?php
require 'PHPMailer/PHPMailerAutoload.php';
// Сообщение
$message = '';
$message = $message."ТЕЛЕФОН<br>".$_POST['phone'];
$message = $message."<br><br>".$_POST['formname'];

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

$mail->Subject = 'Новая заявка от '.$_POST['phone'];
$mail->Body = $message;

if (!$mail->send()) {
    echo 'Ошибка при отправке. Ошибка: ' . $mail->ErrorInfo;
} else {
    echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в
      ближайшее время<Br> $back";
}
?>
