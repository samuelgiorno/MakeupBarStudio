//Contact Form in PHP
<?php
  $destinario = 'info@makeupbarstudio.com';
  //correo
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $header = "Enviado desde la pagina web";
  $mensajeCompleto = $message . "\nAtentamente: " . $name;

  mail($destinario, $mensajeCompleto, $header);

  echo "<script>alert('correo enviado exitosamente')</script>";
  echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>"
?>