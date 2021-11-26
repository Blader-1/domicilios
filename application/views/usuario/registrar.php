<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrar usuario</title>
	<link rel="stylesheet" href="<?php echo base_url('recursos_pagina/');?>css1/estilos.css">
	<link rel="stylesheet" href="<?php echo base_url('recursos_pagina/');?>css/fontello.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
<section class="form-register">
	<main class="container">
		<form method="POST" 
		action="<?php echo base_url().'guardar-usuario'; ?>" enctype="multipart/form-data">
		
		<div class="row">
			<div class="col">
				<label for="nombre" class="form-label">Nombres</label>
				<input id="nombre" type="text" name="nombre" class="form-control" required>
			</div>
			
		</div>
		<div class="row">
			<div class="col">
				<label for="apellido" class="form-label">Apellidos</label>
				<input id="apellido" type="text" name="apellido" class="form-control" required>
			</div>

		</div>
		<div class="row">
			<div class="col">
				<label for="correo" class="form-label">Correo Electrónico</label>
				<input id="correo" type="email" name="correo" class="form-control" required>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label for="pwd" class="form-label">Contraseña</label>
				<input id="pwd" type="password" name="pwd" class="form-control" minlength="8" maxlength="15" required>
			</div>
			<div class="col">
				<label for="cpwd" class="form-label">Comfirmar contraseña</label>
				<input id="cpwd" type="password" name="cpwd" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="form-text">
					Tu contraseña debe tener mínimo 8  y má ximo 15 caracteres
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col">
				<a class="form-text" href="<?php echo base_url().'iniciar-sesion'; ?>"> Ya estás registrado, ir a iniciar sesión</a>
			</div>
		</div>
		<div class="row mt-3 justify-content-center">
			<div class="col-auto">
				<input type="submit" name="registrar_usuario" value="Registrar datos" class="btn btn-success btn-lg">
			</div>
		</div>
</section>
		</form>
	</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>

</html>