
<?php 
$se_hablo_de_bruno = true;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <?php 
    if($se_hablo_de_bruno)
    {
        echo "<p>Esta condicional es verdadera</p>";
    }
    else
    {
        echo "<p>No se hablo de bruno</p>";
    }
    ?>

    <?php 
        if($se_hablo_de_bruno)
        {
    ?>
        <b>Prueba de impresion de PHP</b>
    <?php 
        }
    ?>

    <?php if($se_hablo_de_bruno): ?>
        <b>Prueba de verdad</b>
    <?php else:?>
        <b>Prueba de falso</b>
    <?php endif;?>
</body>
</html>