<?php
    require_once "lib/nusoap.php";
    $cliente = new nusoap_client("http://localhost/practica4dldd/server.php");
    $error = $cliente->getError();
    if ($error){
        echo "<h2>Existe un error</h2><pre>". $error . "</pre>";   
    }
    $resultado = $cliente->call("Libros", array("nombre" => "Libros"));
    if ($cliente->fault){
        echo "<h2>Falla</h2><pre>";
        print_r($resultado);
        echo "</pre>";
    }
    else{
        $error = $cliente->getError();
        if($error){
            echo "<h2>Error</h2><pre>". $error . "</pre>";   
        }
        else{
            echo "<h2>Libros</h2><pre>";
            echo "<font color='blue'>" .$resultado."</font>";
            echo "</pre>";
        }
    }
?>