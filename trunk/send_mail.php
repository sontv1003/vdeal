<?php
    include "includes/class.phpmailer.php"; 
    include "includes/class.smtp.php"; 
    include "includes/config.php"; 

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['mobile'];
    $content = $_POST['comment'];

    //----------------SEND MAIL---------------
    $to      = CONTACT_EMAIL;
    $subject = 'Vdeal - Contact us';
    $email_content = 'Name: '.$name.'<br>Mobile: '.$phone.'<br>--------------------<br>'.$content;

    $mail = new PHPMailer();
    $mail->IsSMTP(); // set mailer to use SMTP
    $mail->Host = "smtp.gmail.com"; // specify main and backup server
    $mail->Port = 465; // set the port to use
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->SMTPSecure = 'ssl';
    $mail->Username = "vdeal.india@gmail.com"; // your SMTP username or your gmail username
    $mail->Password = "dh123456"; // your SMTP password or your gmail password
    $mail->From = $email;
    $mail->FromName = $name; // Name to indicate where the email came from when the recepient received
    $mail->AddAddress($to,"Vdeal-ContactUs");
    $mail->AddReplyTo($email,$name);
    $mail->WordWrap = 1000; // set word wrap
    $mail->IsHTML(true); // send as HTML
    $mail->Subject = $subject;
    $mail->Body = $email_content; //HTML Body
    $mail->AltBody = $email_content; //Text Body

    if(!$mail->Send())
        echo 'fail';
    else
        echo 'success';
?>