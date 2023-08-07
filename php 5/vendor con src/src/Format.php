<?php
//Es importante que el espacio donde se aloja se utilice.
//En este caso el namespace es Text, revisar el archivo composer.json psr-4.
namespace Text;


//dentro del constructor de la clase format, creo funciones estaticas que unicamente devuelven todo o en
//minusculas o en mayusculas.
class Format
{
    public static function upperText($value)
    {
        return strtoupper($value);
    }

    public static function lowerText($value)
    {
        return strtolower($value);
    }
}
?>