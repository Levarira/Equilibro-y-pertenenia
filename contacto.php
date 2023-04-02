<?php
    include 'config/config.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">

    <?php
        include 'templates/dependencias.php';
    ?>

    <title>Formulario Contacto</title>
</head>
<body>

    <header class="header" id="inicio">
            <img src="Imagenes/imagen 21.svg" alt="" class="hamburger">
                <nav class="menu-navegacion">
                    <a href="index.php" class="active">Inicio</a>
                    <a href="comunicacionefectiva.php">Comunicación efectiva</a>
                    <a href="#Empatía">Empatía</a>
                    <a href="#Asertividad">Asertividad</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
    </header>

    <?php
        include 'templates/header.php';
    ?>
    <br><br>
    <div class="row">
        <div class="col">
            <h1>Contacto</h1>
        </div>
        <div class="col">
            <br>
            <a href="nuevoContacto.php"><button type="button" class="btn btn-success">Crear</button></a>
        </div>
    </div>
    <?php 
        $sql = "SELECT * FROM contacto";

        if (($result = mysqli_query($mysqli, $sql)) === false) {
            die(mysqli_error($mysqli));
        }else{
    ?>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Cédula</th>
                <th scope="col">Celular</th>
                <th scope="col">Email</th>
                <th scope="col">Competencias Blandas</th>
                <th scope="col">Mejorar</th>
                <th scope="col">Mensaje</th>
                <th scope="col">Actualizar</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_row($result)){
                        echo'
                        <tr>
                        <th scope="row">'.$row[0].'</th>
                        <td>'.$row[1].'</td>
                        <td>'.$row[2].'</td>
                        <td>'.$row[3].'</td>
                        <td>'.$row[4].'</td>
                        <td>'.$row[5].'</td>
                        <td>'.$row[6].'</td>
                        <td>'.$row[7].'</td>
                        <td>'.$row[8].'</td>
                        <td>
                            <form action = "actualizarContacto.php" method = "post">
                                <input type="hidden" name = "id" value = "'.$row[0].'">
                                <button type = "submit" class= "delete">
                                    <span class="material-symbols-outlined">
                                        update
                                    </span>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action = "php/deleteContacto.php" method = "post">
                                <input type="hidden" name = "id" value = "'.$row[0].'">
                                <button type = "submit" class= "delete">
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                </button>
                            </form>
                        </td>
                        </tr>';
                    }
                ?>
            </tbody>
        </table>
        <?php
        }
        ?>
    </div>

    <script src="js/menu.js"></script>
</body>
</html>