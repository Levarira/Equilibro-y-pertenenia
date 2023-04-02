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
    <form action = "php/sendContacto.php" method = "post">
        <div class="input-group mb-3">
            <span class="input-group-text">Nombres</span>
            <input type="text" aria-label="Nombres" class="form-control" name = "nombre">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Apellidos</span>
            <input type="text" aria-label="Apellido" class="form-control" name = "apellido">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Cédula</span>
            <input type="text" aria-label="Cédula" class="form-control" name = "cedula" > 
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Celular</span>
            <input type="text" aria-label="Celular" class="form-control" name = "celular">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Email</span>
            <input type="text" aria-label="Email" class="form-control" name = "email">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">¿Conoce las competencias blandas y las competencias duras?</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
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
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">¿Qué deseas mejorar?</span>
            <textarea class="form-control" aria-label="¿Qué deseas mejorar?" name = "mejorar"></textarea>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Mensaje</span>
            <textarea class="form-control" aria-label="Mensaje" name = "mensaje"></textarea>
        </div>
        
        <button type="submit" id="form-submit" class="btn btn-primary">Enviar</button>
    </form>
</body>
</html>