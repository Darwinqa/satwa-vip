<?php

    $destino = "darwinqa316@gmail.com";
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    $asunto = "Enviado desde la pagina Satwa ";

    $contenido = "Nombres: " . $nombre . "<br>Apellidos: " . $apellidos . "<br>Correo: " . $correo . "<br>Telefono: " . $telefono . "<br>Mensaje: " . $mensaje;

    
    mail($destino, $asunto, $contenido);

    echo "<script>alert('correo enviado exitosamente')</script>";
    
    $estadoEnvio = $correo->Send();

    if($estadoEnvio){
    echo "El correo fue enviado correctamente.";
    } 
    else {
    echo "Ocurrio un error inesperado!!   mensaje no enviado";
    }



    


?>