<?php
    $name = $_POST['name'];
    $visitor_email = $POST['email'];
    $message = $_POST['message'];


    $email_from = '1a17business@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";


    $to = "1a17business@gmail.com";

    $headers = "From: $email_from \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html")
?>