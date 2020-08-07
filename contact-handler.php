<?php

// johnrbach@elitecreditsolutionsusa.com

    $recipient="ibprince12@gmail.com";
    $subject="Form to email message";
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];

    $mailBody="Name: $name\nEmail: $email\nPhone Number: $phone";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you!</p>";
    header("Location: credit-repair-service.html");

?>