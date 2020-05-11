<?php

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $number = $_POST['number'];

    $mailTo = "tristan.lorenzo21@gmail.com";
    $headers = "From: " .$mailFrom;
    $txt = "You have received an e-mail from: ".$name.".\n\n".$message.
           "Their phone number is: " .$number.;

    mail($mailTo, $subject, $txt, $headers);

    header("Location: index.html?mailsend")
}