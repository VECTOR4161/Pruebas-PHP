<?php

    if(isset($_POST["nombre"]))
    {
        if(!empty($_POST["nombre"]))
            echo "Hola ".$_POST["nombre"]."";
    }
    else
    {
        echo "No mandaste nada";
    }



?>