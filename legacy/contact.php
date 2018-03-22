<?php

if(isset($_REQUEST['name']) && ($_REQUEST['email']) && ($_REQUEST['message'])  ) {

    $email_to = "meghankradolfer.design@gmail.com";
    $email_subject = "Someone actually used this thing!";
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];

    $submit = 'New Message from:'.$name.'. Message:'.$message;

    $headers = 'From: '.$email."\r\n".

        'Reply-To: '.$email."\r\n" .

        'X-Mailer: PHP/' . phpversion();

    @mail($email_to, $email_subject, $submit, $headers);

}


