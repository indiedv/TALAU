<?php
/*Incluyendo Bootstrap*/
echo '
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
';

/*Código para probar conexión OK
if(isset($_POST['datos'])){
    echo 'Ingresamos al php para mostrar la tabla';
}*/
session_start();
include 'db/conexion.php';

if(isset($_POST['datos'])){
    $list_data = mysqli_query($conexion,"SELECT * FROM usuarios");
/*tablas en html para organizar y presentar datos*/
    echo'    
    <table class="table table-light">
        <thead class="table-dark">
            <tr>
                <td>Cédula</td>
                <td>Nombre</td>
                <td>Celular</td>
                <td>Edad</td>
                <td>Correo</td>
            </tr>
        </thead>
        <tbody>  

        ';
        
    while($datos2 = mysqli_fetch_array($list_data)){
        $cedula = $datos2['cedula'];
        $nombre = $datos2['nombre'];
        $celular = $datos2['celular'];
        $edad = $datos2['edad'];
        $correo = $datos2['correo'];
        echo
        '
        <tr>
            <td>' .$cedula.'</td>
            <td>' .$nombre.'</td>
            <td>' .$celular.'</td>
            <td>' .$edad.'</td>
            <td>' .$correo.'</td>
        </tr>
        ';
    }
    echo '
    <tbody>
    </table>';
}
?>