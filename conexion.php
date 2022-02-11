<?php
    define("SERVIDOR", "localhost");
    define("USUARIO", "root");
    define("CLAVE", "");
    define("BASE_DATOS", "prueba");

    $con = new mysqli(SERVIDOR,USUARIO,CLAVE,BASE_DATOS);

    if($con -> connect_errno){
        echo "Fallo Conexion";
    }else{
        
    }
?>