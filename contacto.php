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

    <link href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152092/smartwizard/smart_wizard.min.css" rel="stylesheet" type="text/css" />
	<link href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152091/smartwizard/smart_wizard_theme_arrows.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152197/smartwizard/jquery.smartWizard.min.js"></script>
	<link rel="stylesheet" href="archivos\css\general.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
	
	<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>


	<?php include 'templates/header.php'; ?>



	<script>
		function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}
	</script>
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