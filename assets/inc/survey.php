<?php
 $name = $_POST['name'];
 $rate    = $_POST['rate'];
 $rate2   = $_POST['rate2'];
 $comment1 = $_POST['comment1'];
 $comment2 = $_POST['comment2'];
 $destination_email = "leeonsethanoun@gmail.com";
$email_subject = $_POST['ISTE.240.03 - Linux Nerd (Group 2 Project)'];
$email_body = "Visitor name: $name\n";
$email_body .= "Website design rate: $rate1\n";
$email_body .= "Linux content rate: $rate2\n";
$email_body .= "Any improvement on the website: $comment1\n";
$email_body .= "Favorite part about the website: $comment2";
mail($destination_email, $email_subject, $email_body);
echo "Data Sent\n Thank you";
?>
