
<?php 
    $usuarios = Array(
        array(
            "id" => 0,
            "username" => "Fernando Ichazo"
        ),
        array(
            "id" => 1,
            "username" => "Luis Garcia"
        ),
        array(
            "id" => 2,
            "username" => "Santiago Balcazar"
        )
    );

    $edad_de_pepito = 10;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>






    <script>
        let users = JSON.parse('<?= json_encode($usuarios) ?>');
        let edad = <?= $edad_de_pepito ?>
        //console.log(users);
        console.log(users,edad);
    </script>
    
</body>
</html>