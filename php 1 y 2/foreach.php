
<?php

echo "===================Primera Iteracion=======================\n";

$tiendita = Array(
    "Cafe Normal" => 25,
    "Cafe Premium" => 23
);


foreach($tiendita as $cafe => $precio)
{
    echo "El cafe $cafe tiene un valor de $precio \n";
}

echo "===================Segunda Iteracion=======================\n";


$tienda = Array(
    "Cafe Normal 1" => Array(
        "Normal" => 12,
        "Leche" => 20
    ),
    "Cafe Premium 1" => Array(
        "Normal" => 15,
        "Leche" => 25
    )
);

foreach($tienda as $cafes)
{
    foreach($cafes as $tipo => $precio)
    {
        echo "El tipo de cafe es $tipo con un precio de $precio \n";
    }
}