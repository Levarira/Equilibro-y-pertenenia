<?php
    include '../config/config.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $competencias = $_POST['competencias'];
    $mejorar = $_POST['mejorar'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO contacto(Nombres, Apellidos, Cedula, Celular, Email, Competencias, Observacion, Mensaje) VALUES ('$nombre','$apellido','$cedula','$celular','$email','$competencias','$mejorar','$mensaje')";

    if (($result = mysqli_query($mysqli, $sql)) === false) {
        die(mysqli_error($mysqli));
    }else{
        header("Location: http://localhost/ProyectoDiplomado/contacto.php");
    }

?>