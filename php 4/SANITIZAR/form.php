<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Validacion</title>
</head>
<body>
    <form action="server.php" method="post">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="username">Username:</label>
        <input type="text" name="username" id="username">

        <label for="correo">Email:</label>
        <input type="text" name="correo" id="correo">

        <label for="edad">Edad:</label>
        <input type="text" name="edad" id="edad">
        

        <button type="submit">Enviar</button>
    </form>
</body>
</html>