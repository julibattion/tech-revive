<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $nombre = $_POST["name"];
    $correo = $_POST["mail"];
    $asunto = $_POST["subject"];
    $mensaje = $_POST["message"];
    
    // Dirección de correo electrónico a la que se enviará el formulario
    $destinatario = "techrevive.informatica@gmail.com";
    
    // Construye el mensaje del correo electrónico
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $correo\n";
    $contenido .= "Asunto: $asunto\n";
    $contenido .= "Mensaje:\n$mensaje\n";
    
    // Envía el correo electrónico
    $resultado = mail($destinatario, "Nuevo mensaje del formulario", $contenido);
    
    // Verifica si el correo electrónico se envió correctamente
    if ($resultado) {
        echo "El mensaje ha sido enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
} else {
    // Si no se ha enviado el formulario, redirige al formulario HTML
    header("Location: formulario.html");
}

