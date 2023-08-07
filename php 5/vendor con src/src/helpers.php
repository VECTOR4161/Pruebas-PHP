<?php
//En la linea siguiente se pregunta dentro del sistema si es que la funcion existe para no sobrecargar
//la ejecucion del sistema
if(!function_exists('upper'))
{
    //aqui se denomina una funcion upper que mediante la palabra Text definida por ele usuario llama al
    //archivo Format.php
    //debe llamarse debido a que es su clase hermana dentro de la carpeta src
    function upper($value)
    {
        return Text\Format::upperText($value);
    }
}

if(!function_exists('lower'))
{
    function lower($value)
    {
        return Text\Format::lowerText($value);
    }
}
    

?>