
<?php

header('Content-Type: application/json');

function validar_campo($campo){
    $campo = trim($campo);
    $campo = stripcslashes($campo);
    $campo = htmlspecialchars($campo);

    return $campo;
}


if(isset($_POST["nombre"]) && !empty($_POST["nombre"]) &&
isset($_POST["correo"]) && !empty($_POST["correo"]) &&
isset($_POST["asunto"]) && !empty($_POST["asunto"]) &&
isset($_POST["mensaje"]) && !empty($_POST["mensaje"])
){

    $destinatario = "trustdigitalproducer@gmail.com";
    $nombre = validar_campo($_POST["nombre"]);
    $correo = validar_campo($_POST["correo"]);
    $asunto = validar_campo($_POST["asunto"]);
    $mensaje = validar_campo($_POST["mensaje"]);


$contenido = "Nombre: " . $nombre . "\n Asunto: " . $asunto;
$contenido .= "\n Correo: " . $correo;
$contenido .= "\n Mensaje: " . $mensaje;

$headers = 'From: ' . $asunto;
mail($destinatario, "Mensaje de: " . $nombre, $contenido, $headers);


    return print(json_encode('ok'));
    
}

return print(json_encode('no'));


