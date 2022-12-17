<?php

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['send'])) {

    $to = 'CS@elnouroptics.net';
    $myMail = 'abdelrahmanelalfee@gmail.com';
    $smtpPass = 'koxqeobcyoxdnxqo';
    $name = $_POST['name'];
    $msg = $_POST['message'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $mail = new PHPMailer;

    // $mail->SMTPDebug = 3;                  // Enable verbose debug output

    $mail->isSMTP();                          // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';           // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                   // Enable SMTP authentication
    $mail->Username = $myMail;                // SMTP username
    $mail->Password = $smtpPass;              // SMTP password
    $mail->Port = 587;                        // TCP port to connect to

    $mail->setFrom($myMail, 'Website', 1);
    $mail->addAddress($to);                   // Add a recipient
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->Body .= " My Name: ";
    $mail->Body .= $name;
    $mail->Body .= " My email address: ";
    $mail->Body .= $email;

    if (!$mail->send()) {
        echo "<script> alert('Message could not be sent.'); </script>";
        header("refresh:1;url=index.html");
    } else {
        echo "<script> alert('Mail sent successfuly.'); </script>";
        header("Refresh: 1; URL=index.html");
    }
}
