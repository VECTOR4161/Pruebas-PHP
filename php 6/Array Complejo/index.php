<?php
$courses = Array(
    "Frontend" => "javascript",
    "Framework" => "laravel",
    "Backend" => "php"
);

echo "<pre>";
var_dump($courses);


foreach($courses as $nombre => $curso)
{
    echo "<h4>$nombre es $curso</h4>";
}

echo "<h1>Uso de array_walk()</h1>";
echo "<br>";

function upper($course, $key)
{
    echo ucfirst($course) . "=> $key <br>";
}

//Funcion para caminar (recorrer) los elementos de un array.
array_walk($courses,"upper");

/*
FUNCIONES DE ARRAY

**EXISTE UN KEY
--array_key_exists('frontend', $courses);

**EXISTE UN VALOR
--in_array('javascript', $courses);

**MOSTRAR TODOS LOS KEYS DE UN ARRAY.
--array_keys($courses);

**MOSTRAR TODOS LOS VALORES DE UN ARRAY.
--array_values($courses);
*/