<?php

$aviso = "";
if ($_POST['email'] != "") {
    // email de destino
    $email = "damianminniti@hotmail.com";

    // asunto del email
    $subject = "Contacto";

    // Cuerpo del mensaje
    $mensaje = "---------------------------------- \n";
    $mensaje .= "            Contacto               \n";
    $mensaje .= "---------------------------------- \n";
    $mensaje .= "NOMBRE:   " . $_POST['nombre'] . "\n";
    $mensaje .= "EMPRESA:  " . $_POST['empresa'] . "\n";
    $mensaje .= "EMAIL:    " . $_POST['email'] . "\n";
    $mensaje .= "TELEFONO: " . $_POST['telefono'] . "\n";
    $mensaje .= "FECHA:    " . date("d/m/Y") . "\n";
    $mensaje .= "HORA:     " . date("h:i:s a") . "\n";
    $mensaje .= "IP:       " . $_SERVER['REMOTE_ADDR'] . "\n\n";
    $mensaje .= "---------------------------------- \n\n";
    $mensaje .= $_POST['mensaje'] . "\n\n";
    $mensaje .= "---------------------------------- \n";
//    $mensaje .= "Enviado desde http://blog.unijimpe.net \n";

    // headers del email
    $headers = "From: " . $_POST['email'] . "\r\n";

    // Enviamos el mensaje
    if (mail($email, $subject, $mensaje, $headers)) {
        $aviso = "Su mensaje fue enviado.";
        echo $aviso;
        echo <<< HTML
        <a href="http://damianminniti.com.ar/#!/page_Contact" class="button1" >Volver</a>
  <style type="text/css">
body {
font-weight: bold;
background-color: #2A2A2A;color: #CCCCCC;
font-family: Arial;font-size:18px;color: #cccccc;max-width: 1100px;margin: auto;
}
a {
text-decoration:none;
}
    .parrafo{
    color:#33ff00;
    font-size:12px;
    }

  </style>
</head>
HTML;
    } else {
        $aviso = "Error de envío.";
        echo $aviso;
    }
}
 
