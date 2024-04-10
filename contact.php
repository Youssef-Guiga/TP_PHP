<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo="joumanafradi99@gmail.com";

    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

//    mail($mailTo,$subject,$txt,$headers);
    header("Location: emailSent.html?mailsend!");

}






//?>

