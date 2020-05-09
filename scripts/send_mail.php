<?php

use PHPMailer\PHPMailer\PHPMailer;

$errorMail = '';
$errorMailStyle = 'style="color: rgba(232, 74, 95, 1)"';
$isError = false;

if (isset($_POST['recipients']) && isset($_POST['subject']) && isset($_POST['message'])) {
    require 'vendor/autoload.php';

    $recipients = $_POST['recipients'];
    $subject = $_POST['subject'];
    $messsage = $_POST['message'];

    $mail = new PHPMailer();
    $mail->setLanguage('ru', 'vendor/phpmailer/phpmailer/language/');
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = $_SERVER['MAIL_HOST'];
    $mail->Username = $_SERVER['MAIL_USER'];
    $mail->Password = $_SERVER['MAIL_PASSWORD'];
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $arrayRecipients = $mail->parseAddresses($recipients);

    foreach ($arrayRecipients as $recipient) {
        $mail->addAddress($recipient['address'], $recipient['name']);
    }

    $emailSender = $_SERVER['MAIL_USER'];
    $emailName = 'Павел Мискевич';
    $mail->isHTML(true);
    $mail->setFrom($emailSender, $emailName);
    $mail->Subject = $subject;
    $mail->Body = $messsage;

    if ($mail->send()) {
        $fileName = 'assets/files/recipients.csv';
        $fileRecipients = fopen($fileName, 'w+');
        foreach ($arrayRecipients as $recipient) {
            fputcsv($fileRecipients, $recipient);
        }
        fclose($fileRecipients);
    } else {
        $isError = true;
        $errorMail = 'Сообщение не было отправлено! ' . $mail->ErrorInfo;
    };
}
