<?php

include_once 'conexion.php';

$con = conexion();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Personas vacunadas</title>
</head>

<body>
    <br>
    <div class="container">
    <h1>Consulta personas:</h1>
    <h3>Listado</h3>

        <table class="table table-striped">
            <tr>
                <th>Nombre</th>
                <th>DPI</th>
            </tr>
            <?php
            // $primerNombre = 'aaron';
            // $segundoNombre = 'aaron';
            // // $tercerNombre = 'aaron';
            // $primerApellido = 'aaron';
            // $segundoApellido = 'aaron';

            $sql = "SELECT * FROM `vacunas` WHERE `nombres` LIKE '%aaron%' AND `nombres` LIKE '%teos%'";
            $query = mysqli_query($con, $sql);
            if ($query) {
                while ($row = mysqli_fetch_array($query)) {
                    $nombre = $row['nombres'];
                    $dpi = $row['dpi'];
            ?>
                    <tr>
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo $dpi; ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</body>

</html>