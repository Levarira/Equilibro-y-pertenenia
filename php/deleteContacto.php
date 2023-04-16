<?php
    include '../config/config.php';

    $id = $_POST['id'];

    $sql = "DELETE FROM contacto WHERE Id = $id";

    if (($result = mysqli_query($mysqli, $sql)) === false) {
        die(mysqli_error($mysqli));
    }else{
        header("Location: http://localhost/Equilibro-y-pertenenia/contacto.php");
    }

?>