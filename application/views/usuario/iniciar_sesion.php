<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iniciar sesion o Registrarse</title>
	<link rel="stylesheet" href="<?php echo base_url('recursos_pagina/');?>css1/estilos.css">
	<link rel="stylesheet" href="<?php echo base_url('recursos_pagina/');?>css/fontello.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
<section class="form-register">
	<main class="container">
		
		<form action="<?php echo base_url().'auth'; ?>" method="POST">
			
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
			
					</div>
		<div class="row">
			<div class="col">
				<a class="form-text" href="<?php echo base_url().'registrar-usuario' ?>">Ir a registro de usuario
					
				</a>
			</div>
		</div>
		<div class="row mt-3 justify-content-center">
			<div class="col-auto">
				<input type="submit" name="iniciar_sesion" value="Iniciar Sesión" class="btn btn-success btn-lg">
			</div>
		</div>
		</section>
		</form>
	</main>
</html>