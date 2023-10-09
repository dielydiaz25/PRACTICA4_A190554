<?php
    require_once "lib/nusoap.php";
    function Libros($nombre){
        if ($nombre == "Libros"){
            return join(",", array(
                "Boulevard", 
                "Cuando no queden más estrellas que contar",
                "Te espero en el fin del mundo",
                "Romper el circulo",
                "La fragilidad de un corazón bajo la lluvia"));
        }
        else{
            return "No hay libros";
        }
    }
    $server = new soap_server(); 
    $server->register("Libros");
    if(!isset($HTTP_RAW_POST_DATA))$HTTP_RAW_POST_DATA = file_get_contents('php://input');
        $server->service($HTTP_RAW_POST_DATA);
?>