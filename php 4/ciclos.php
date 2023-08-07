<?php 
    $usuarios = Array(
        "Usuario1" => "Pablo",
        "Usuario2" => "Juan",
        "Usuario3" => "Pedro"
    );
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
</head>
<body>
    <ul>
        <?php for($i = 0 ; $i < 6; $i++):  ?>
                <li>Etiqueta en el numero <?= $i?></li>
        <?php endfor; ?>

    </ul>
    <h1>Uso de While</h1>
    <ul>

        <?php while(false):?>
                <li>False para evitar que se imprima infinitamente</li>
        <?php endwhile;?>
    </ul>
    <h1>Uso de foreach</h1>
    <ul>
        <?php foreach($usuarios as $user => $nombre):?>
                <li>El <?= $user?> con el nombre <?= $nombre?> esta en la lista</li>
        <?php endforeach;?>
    </ul>
</body>
</html>