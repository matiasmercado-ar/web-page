<?php

if($_POST) {

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $space = " ";
    $formcontent=" From: $name $space $lastname \n Phone: $phone \n Message: $message";
    $recipient = "matias@matiasmercado.ar";
    $recipient2 = "tecmm7@gmail.com";
    $subject = "Contacto desde mi pagina web";
    $mailheader = "From: $email \r\n";
    
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    mail($recipient2, $subject, $formcontent, $mailheader) or die("Error!");
    
} else {
    echo '<p>Something went wrong.\n
            Algo malió sal :(</p>';
}

?>