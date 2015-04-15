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
    //$mail->addAddress('riaz981@gmail.com','Riaz');
    $mail->addAddress('matt@alpinehabitat.com', 'Matthew Reede');     // Add a recipient
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
            echo "<div class='topandbottom' style='background-color:#FEFAFA;'>";
            echo "<br>"."<div style='margin-top:6em;'><h1 style='text-align: center;weight:bold; color:#3C3B3B;'>Error</h1>";
            echo "<p style='text-align: center;font-size:20px;color:#3C3B3B;'>Your message could not be sent.</p>";
            echo "<p style='text-align:center;font-size:20px;color:#3C3B3B;' Mailer Error: ".$mail->ErrorInfo."</p></div>";
            echo "</div>";
        }

        else
        {
            echo "<div class='topandbottom' style='background-color:#FEFAFA;'>";
            echo "<br>"."<div style='margin-top:6em;'><h1 style='text-align: center;weight:bold; color:#3C3B3B;'>Thank you</h1>";
            echo "<p style='text-align: center;font-size:20px;color:#3C3B3B;'>Your message has been sent</p>";
            echo "<p style='text-align:center;font-size:20px;color:#3C3B3B;'>Someone will get in touch with your shortly</p></div>";
            echo "</div>";
        }

    }

    else{

        header("Location: http://apartmentclub.localhost");
    }

?>
<?php get_footer(); ?>
