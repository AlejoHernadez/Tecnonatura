<?php

$connection = mysqli_connect('localhost', 'root', '', 'tecnatu') 
or die(mysql_error($mysqli));

insertar($connection);

function insertar($conexion){
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $consulta = "INSERT INTO clientes(codigo, nombre, correo)
     VALUES ('$codigo', '$nombre', '$correo')";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

}



?>
