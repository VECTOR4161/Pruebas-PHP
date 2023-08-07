<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="./server.php" method="POST" enctype="multipart/form-data">

        <!-- Tipos de Inputs -->
        <!-- Input Simple -->
        <!--
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        -->

        <!-- Arreglos -->
        <!--
        <label for="personas">Nombre:</label>
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        -->

        <!-- Arreglos Asociativos-->
        <!--
        <label>Nombre</label>
        <input type="text" name="persona[nombre]">
        <label>Correo</label>
        <input type="email" name="persona[email]">
        <label>Edad</label>
        <input type="number" name="persona[edad]">
        -->

        <!-- Checkbox -->
        <!--
        <input type="checkbox" name="list1" value="valor1">
        <input type="checkbox" name="list2" value="valor2">
        <input type="checkbox" name="list3" value="valor3">
        -->

        <!-- Radios -->
        <!--
        <label for="Mexico">Mexico</label>
        <input type="radio" name="pais" value="Mexico">
        <label for="Colombia">Colombia</label>
        <input type="radio" name="pais" value="Colombia">
        <label for="Peru">Peru</label>
        <input type="radio" name="pais" value="Peru">
        -->

        <!-- Multiples Archivos-->
        <label for="galeria">Carga Tus Imagenes</label>
        <input type="file" multiple name="galeria[]" id="galeria">

        <button type="submit">Enviar Formulario</button>
    </form>

</body>
</html>