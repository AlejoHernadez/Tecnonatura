<?php

$connection = mysqli_connect('localhost', 'root', '', 'tecnatu') 
or die(mysql_error($mysqli));

diferenciar($connection);

function diferenciar($connection){
    if(isset($_POST['registrar'])){
        insertar($connection);
    }
    if(isset($_POST['eliminar'])){
        eliminar($connection);
    }
}

function insertar($conexion){
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $consulta = "INSERT INTO clientes(codigo, nombre, correo)
     VALUES ('$codigo', '$nombre', '$correo')";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    header("location: indexClien.php");
    
}

function eliminar($conexion){
    $codigo = $_POST['codigo'];
    
    $consulta = "DELETE FROM clientes WHERE codigo='$codigo'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    header("location: indexClien.php");
}

function cargartabla($conexion){
    $consulta = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexion, $consulta);

    while($fila = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$fila['codigo'];
        echo "<td>".$fila['nombre'];
        echo "<td>".$fila['correo'];
        echo "<tr>";
    }
    mysqli_close($conexion);
}

?>

