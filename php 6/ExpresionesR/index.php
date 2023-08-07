<?php
$password = "123456a";

//En este caso se puede observar que la contraseña debe tener caracteres del 0 - 9 y con un tamaño de entre 6
//y 9 caracteres.
var_dump(preg_match("/^[0-9]{6,9}$/",$password));
//si la condicion se cumple regresa 1 de lo contrario regresa 0.
var_dump((bool) preg_match("/^[0-9]{6,9}$/",$password));
//usando un casteo podemos lograr que nos regrese un valor booleano.