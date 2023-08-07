<?php
$nombre = preg_replace("/\d/","",$_POST["nombre"]);
$username = htmlentities($_POST["username"]);
$correo = filter_var($_POST["correo"],FILTER_SANITIZE_EMAIL);
$edad = filter_var($_POST["edad"],FILTER_SANITIZE_NUMBER_INT);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de mi usuario</title>
</head>
<body>
    <h2>Datos del usuario:</h2>
    <p>Nombre:</p>
    <?= $nombre ?>
    <p>Username:</p>
    <?= $username ?>
    <p>Correo:</p>
    <?= $correo ?>
    <p>Edad:</p>
    <?= $edad ?>
</body>
</html>