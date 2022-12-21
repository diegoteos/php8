<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar archivo</title>
</head>

<body>
    <form action="procesar.php" method="post" enctype="multipart/form-data">

        <label for="">
            Nombre:
            <input type="text" name="name" id="">
        </label>
        <br><br>
        <label for="">
            Imagen:
            <br>
            <input type="file" name="image" id="">
            <br><br>
            <button type="submit">Enviar</button>
        </label>
    </form>
</body>

</html>


<?php
