//Contact Form in PHP
<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $surname = htmlspecialchars($_POST['surname']);
  $phone = htmlspecialchars($_POST['phone']);
  $message = htmlspecialchars($_POST['message']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "info@makeupbarstudio.com"; //enter that email address where you want to receive all messages
      $subject = "From: $name <$email>";
      $body = "Name: $name\nSurname: $surname\nEmail: $email\nphone: $phone\n\nMessage
        :\n$message\n\nRegards,\n$name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Tu mensaje ha sido enviado";
      }else{
         echo "Lo sentimos, no se pudo enviar su mensaje.";
      }
    }else{
      echo "¡Introduzca una dirección de correo electrónico válida!";
    }
  }else{
    echo "¡El campo de correo electrónico y mensaje es obligatorio!";
  }
?>