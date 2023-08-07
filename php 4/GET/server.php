<?php
echo "<pre>";
if(isset($_GET))
{
    if(isset($_GET["nombre"]))
        $nombre = $_GET["nombre"];
    if(isset($_GET["edad"]))
        $edad = $_GET["edad"];
    var_dump($nombre);
    var_dump($edad);
}



echo "</pre>";
?>