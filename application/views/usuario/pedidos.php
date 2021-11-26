<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrar Pedido</title>
	<link rel="stylesheet" href="<?php echo base_url('recursos_pagina/');?>css1/estilos.css">
	<link rel="stylesheet" href="<?php echo base_url('recursos_pagina/');?>css/fontello.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
<section class="form-register">
	<main class="container">
		<form action="<?php echo base_url().'authe'; ?>" method="POST">
				
		<div class="row">
			<div class="col">
				<label for="nombre" class="form-label">Nombres</label>
				<input id="nombre" type="text" name="nombre" class="form-control" required>
			</div>
			
		</div>
		<div class="row">
			<div class="col">
				<label for="telefono" class="form-label">Telefono</label>
				<input id="telefono" type="text" name="telefono" class="form-control" required>
			</div>

		</div>
		<div class="row">
			<div class="col">
				<label for="pedido" class="form-label">Pedido</label>
				<input id="pedido" type="text" name="pedido" class="form-control" required>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label for="direccion" class="form-label">Direccion</label>
				<input id="direccion" type="text" name="direccion" class="form-control" minlength="" maxlength="50" required>
			</div>

			<div class="row">
			<div class="col">
				<label for="Estadopedido" class="form-label">Estado Pedido</label>
				<select id="Estadopedido" type="text" name="Estadopedido" class="form-select">
					<option>En Espera</option>
				</select> 
			</div>
			
		<div class="row mt-3 justify-content-center">
			<div class="col-auto">
				<input type="submit" name="guardar-pedido" value="Registar Pedido" class="btn btn-success btn-lg">
			</div>
		</div>

		
		</section>
		</form>
		
	</main>
</html>