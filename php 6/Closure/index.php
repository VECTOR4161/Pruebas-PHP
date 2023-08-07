<?php
    /*
    $great = function($name)  //variable que requiere logica
    {
        return "Hola, $name";
    };



    echo $great('Fernando');
    */

    function greet(Closure $lang, $name)
    {
        return $lang($name);
    }

    $es = function($name)
    {
        return "Hola, $name";
    };

    $en = function($name)
    {
        return "Hello, $name";
    };

    echo greet($es, "Fernando");

