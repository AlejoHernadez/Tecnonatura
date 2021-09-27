<?php include('datos.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnonatura</title>
    <link rel="stylesheet" href="../css/estiloiniciar_sesion.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <img id=logo src="../css/imagenes/natt.png" alt="Tecnonatura" >
        <h1>TECNONATURA </h1>
        <nav id=menu>
            <a href="index.php"> Inicio</a>
            <a href="productos.html">Productos</a> 
            <a href="formRegistrarse.php">Registrarse</a>
            <a href="tipoDeUsuario.html">Iniciar Sesion</a>      
        </nav>
    </header>


<div class="form-register">
    <form action="datos.php" method="POST">
        <input type="text" name="codigo" class="controls" placeholder="Pon tu codigo">
        <input type="text" name="nombre" class="controls" placeholder="Pon tu nombre">
        <input type="text" name="correo" class="controls" placeholder="Pon tu correo">
        <button class="botons" type="submit" name="registrar" > registrar</button>
        <p><a href="tipoDeUsuario.html">¿Ya tienes una Cuenta?</a></p>
    </form>
</div>



    <div>
    <footer>
        <table>
            <tr>
                <th id="derechos-autor">Universidad Tecnologica de Nezahualcoyolt<br> TIC's Desarrollo de Software Multiplataforma
                    <br> &#xa9; 2021 CUM | Politicas de Privacidad       
                </th>
            </tr>
        </table>
    </footer>
</div>

</body>
</html>