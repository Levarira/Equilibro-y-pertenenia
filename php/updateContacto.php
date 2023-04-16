<?php
    include '../config/config.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $competencias = $_POST['competencias'];
    $mejorar = $_POST['mejorar'];
    $mensaje = $_POST['mensaje'];

    echo $id;

    $sql = "UPDATE contacto SET Nombres='$nombre',Apellidos='$apellido',Cedula='$cedula',Celular='$celular',Email='$email',Competencias='$competencias',Observacion='$mejorar',Mensaje='$mensaje' WHERE Id = '$id'";

    if (($result = mysqli_query($mysqli, $sql)) === false) {
        die(mysqli_error($mysqli));
    }else{
        header("Location: http://localhost/Equilibro-y-pertenenia/contacto.php");
    }

?>