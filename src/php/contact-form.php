<?php

if($_POST) {

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $space = " ";
    //Form of the mail Im gonna recive
    $formcontent=" De: $name $space $lastname \n Teléfono: $phone \n\nMensaje: $message";
    $recipient = "matias@matiasmercado.ar";
    $recipient2 = "tecmm7@gmail.com";
    $subject = "Mail de: matiasmercado.com";
    //Complete header for utf8.
    $mailheader = 'From: '.$email."\r\n".
                  'Content-Type: text/plain; charset=UTF-8' . "\r\n" .
                  'Para: WebSite'  .  "\r\n" .
                  'X-Mailer: PHP/' . phpversion();

    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    mail($recipient2, $subject, $formcontent, $mailheader) or die("Error!");
    
} else {
    echo '<p>Something went wrong.\n
            Algo malió sal :(</p>';
}

?>