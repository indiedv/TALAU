<?php

$host = "localhost";
$user = "root";
$pwd = "";
$db = "atenea";

$conexion = new mysqli($host,$user,$pwd,$db);

if($conexion->connect_errno){
    echo"Se experimentan fallos de conexión";
    exit();
}

?>
