<?php
    include 'config/config.php';

    $id = $_POST['id'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        include 'templates/dependencias.php';
    ?>

    <title>Formulario Contacto</title>
</head>
<body>
    <?php
        include 'templates/header.php';
    ?>

    <h1>Formulario de contacto</h1>
    <?php
        $sql = "SELECT * FROM contacto WHERE id = $id";

        if (($result = mysqli_query($mysqli, $sql)) === false) {
            die(mysqli_error($mysqli));
        }else{
            while ($row = mysqli_fetch_row($result)){
    ?>
    <form action = "php/updateContacto.php" method = "post">
        <div class="input-group mb-3">
            <span class="input-group-text">Nombres</span>
            <input type="text" aria-label="Nombres" class="form-control" name = "nombre" value = "<?php echo $row[1];?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Apellidos</span>
            <input type="text" aria-label="Apellido" class="form-control" name = "apellido" value = "<?php echo $row[2];?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Cédula</span>
            <input type="text" aria-label="Cédula" class="form-control" name = "cedula" value = "<?php echo $row[3];?>"> 
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Celular</span>
            <input type="text" aria-label="Celular" class="form-control" name = "celular" value = "<?php echo $row[4];?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Email</span>
            <input type="text" aria-label="Email" class="form-control" name = "email" value = "<?php echo $row[5];?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">¿Conoce las competencias blandas y las competencias duras?</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <?php
                if($row[6] == "SI"){
            ?>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="competencias" id="flexRadioDefault1" value = "SI" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Si
                </label>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <div class="form-check">
                <input class="form-check-input" type="radio" name="competencias" id="flexRadioDefault2" value = "NO">
                <label class="form-check-label" for="flexRadioDefault2">
                    No
                </label>
            </div>
            <?php 
                } else {
            ?>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="competencias" id="flexRadioDefault1" value = "SI">
                <label class="form-check-label" for="flexRadioDefault1">
                    Si
                </label>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <div class="form-check">
                <input class="form-check-input" type="radio" name="competencias" id="flexRadioDefault2" value = "NO" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    No
                </label>
            </div>
            <?php 
                }
            ?>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">¿Qué deseas mejorar?</span>
            <textarea class="form-control" aria-label="¿Qué deseas mejorar?" name = "mejorar"><?php echo $row[7];?></textarea>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Mensaje</span>
            <textarea class="form-control" aria-label="Mensaje" name = "mensaje"><?php echo $row[8];?></textarea>
        </div>
        <input type="hidden" name = "id" value = "<?php echo $row[0];?>">
        <button type="submit" id="form-submit" class="btn btn-primary">Actualizar</button>
    </form>
    <?php
            }
        }
    ?>
</body>
</html>