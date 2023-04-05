<?php
//VARIABLES
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

//ESTRUCTURA DEL CORREO
    $header = 'From: '. $correo . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
    $message .= "Su email es: " . $correo . " \r\n";
    $message .= "Telefono de contacto: " . $telefono . " \r\n";
    $message .= "Mensaje: " .$_POST['mensaje'] . " \r\n";
    $message .= "Enviado el: " . date('d/m/Y', time());

    $para = 'evelazqueztprog@gmail.com';
    $asunto = 'Contacto Portafolio';

    mail($para, $asunto, $mensaje, $header);
    echo "<script>alert('Correo Enviado Exitosamente. :)');</script>";
    echo "<script>setTimeout(\"location.href='../index.html'\",1000)</script>";
?>