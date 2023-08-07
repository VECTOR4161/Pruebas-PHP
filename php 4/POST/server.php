<?php
echo "<pre>";
if(isset($_POST))
{
    if(isset($_POST["nombre"]))
        $nombre = $_POST["nombre"];
    if(isset($_POST["edad"]))
        $edad = $_POST["edad"];
    var_dump($nombre);
    var_dump($edad);
}



echo "</pre>";
