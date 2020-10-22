<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$text = $_REQUEST['text'];

if(empty($name) || empty($email) || empty($phone)|| empty($text)){

    echo "<script type='text/javascript'> alert('Your Message not sent ')</script>";
}

else
{
    mail("Jattesh13@gmail.com","Message from Website", $text, "From: $name <$email>");
    echo "<script type='text/javascript'> alert('Your Message sent successfully')</script>";
}
?>