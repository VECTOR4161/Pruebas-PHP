<?php

//valores
function greet($name)
{
    return "Hola, $name";
}

echo greet("fernando");

//referencias 
$course = 'PHP';
function path($course)
{
    $course = 'Laravel';
    echo $course;
}

path($course);
echo $course;


//predeterminado
function greet2($name = "Fernando")
{
    return "Hola, $name";
}

echo greet2();