<?php
/*
Template Name: mail
*/
?>
<?php get_header(); ?>
<?php

    //saurabh981
    require 'PHPMailer-master/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $name = $_REQUEST['clientname'];
    $email = $_REQUEST['emailname'];
    $comment = $_REQUEST['comment'];

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'apartmentsydney81@gmail.com'; // SMTP username
    $mail->Password = 'habitat81'; // SMTP password
    $mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                     // TCP port to connect to
    $mail->From = 'info@apartmentsydney.com';                           // This is the webhosting sites email
    $mail->FromName = 'Apartment Sydney';                               // Name of the webshosting site or company's site
    $mail->addAddress('riaz981@gmail.com','Riaz');
    //$mail->addAddress('matt@alpinehabitat.com', 'Matthew Reede');     // Add a recipient
    //$mail->addAddress('ellen@example.com');                         // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    $mail->addReplyTo($email, $name);
    //$mail->addCC('stefan@alpinehabitat.com');
    $mail->addBCC('riaz.hasan@yahoo.com.au');
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                    // Set email format to HTML
    $mail->Subject = 'Test Email. Enquiry from Apartment Sydney.';
    $message = "There has been an enquiry sent through Apartment Sydney"."<br>";
    $message .= "From: ".$name."<br>";
    $message .= "On: ".date("Y-m-d H:i:s")."<br>";
    $message .= "Email: ".$email."<br>";
    $message .= "Enquiry: ".$comment."<br>";
    $message .= "IP Address: ".$_SERVER["REMOTE_ADDR"]."<br>";
    $mail->Body    = $message;
    $mail->AltBody = 'HTML email is not enabled. An enquiry has been sent from: '.$name.'. Email is: '.$email.' And the enquiry is: '.$comment;

    //checking if name or email is empty. if not empty send email.
    if(!empty($name) || !empty($email))
    {
        if(!$mail->send())
        {
            echo "<div class='topandbottom' style='margin-top:1em; margin-left:1em; margin-right:1em; margin-bottom:1em; color:white; background-color:#1489a6;'>";
            echo 'Your message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            echo "</div>";
        }

        else
        {
            echo "<div class='topandbottom' style='margin-top:1em; margin-left:1em; margin-right:1em; margin-bottom:1em; color:white; background-color:#1489a6;'>";
            echo "<br>".'Thank you for emailing us'."<br>";
            echo 'Your message has been sent'."<br>";
            echo 'Someone will get in touch with your shortly';
            echo "</div>";
        }

    }

    else{

        header("Location: http://apartmentclub.localhost");
    }

?>
<?php get_footer(); ?>
