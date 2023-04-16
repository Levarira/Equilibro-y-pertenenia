<!DOCTYPE html>
<html lang="en">

<head>


  <?php
  include 'templates/dependencias.php';
  include 'templates/header.php';
  ?>

</head>

<body>

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
<div class="container">

<div class="container">
	<header class="header">
		<legend><h1 id="title" class="text-center">Formulario de contacto</h1></legend>
		<p id="description" class="text-center">
			! Gracias Por Tu Respuesta !
		</p>
	</header>
	<div class="form-wrap">	
		<form id="survey-form" action = "php/sendContacto.php" method = "post">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label id="name-label" for="name">Nombre</label>
						<input type="text" name="name" id="name" placeholder="Nombre" class="form-control" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label id="email-label" for="email">Apellido</label>
						<input type="text" name="email" id="email" placeholder="Apellido" class="form-control" required>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label id="number-label" for="number">Cédula <small></small></label>
						<input type="number" name="age" id="number" class="form-control" placeholder="Cédula" >
					</div>
				</div>
                
				<div class="col-md-6">
					<div class="form-group">    
                    <label id="number-label" for="number">Celular <small></small></label>
						<input type="number" name="age" id="number" class="form-control" placeholder="Celular" >
				
					</div>
				</div>
                <div class="col-md-6">
					<div class="form-group">
                    <label id="number-label" for="number">Email<small>  (optional)</small></label>
						<input type="email" name="age" id="number" class="form-control" placeholder="Email" >
				
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>¿Conoce las competencias blandas?</label>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="customRadioInline1" value="Definitely" name="customRadioInline1" class="custom-control-input" checked="¿Conoce las competencias blandas?">
							<label class="custom-control-label" for="customRadioInline1">Yes</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="customRadioInline2" value="Maybe" name="customRadioInline1" class="custom-control-input">
							<label class="custom-control-label" for="customRadioInline2">No</label>
						</div>
						
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>¿Qué deseas Mejorar?</label>
						<textarea  id="comments" class="form-control" name="comment" placeholder="¿Qué deseas Mejorar?"></textarea>
					</div>
				</div>
			</div>
            
			<div class="row">   
				<div class="col-md-12">
					<div class="form-group">
						<label>Deja tu mensaje..</label>
						<textarea  id="comments" class="form-control" name="comment" placeholder="Escribe aquí"></textarea>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4">
					<button type="submit" id="submit" class="btn btn-primary btn-block">Enviar</button>
				</div>
			</div>

		</form>
	</div>	
</div>
</div>
</br>
  
  
</body>
</br>
</br>
  

<?php include 'templates/footer.php'; ?>

</html>