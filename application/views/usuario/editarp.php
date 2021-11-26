

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Editar Pedidos</title>
	<link rel="stylesheet" href="<?php echo base_url('recursos_pagina/');?>css1/estilos.css">
	<link rel="stylesheet" href="<?php echo base_url('recursos_pagina/');?>css/fontello.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head> 
<body>
<section class="form-register">
	<main class="container">
	<form action="<?php echo base_url().'actualizar-pedido'?>" method="POST">
      <input type="hidden" name="id" value="<?php echo $pedido->_id ?>">
      <div class="col">
      	
	     <strong>Nombre:</strong><input id="nombre" type="text" name="nombre" class="form-control" value="<?php echo $pedido->nombre; ?>">
		</div>
	</div>
	<div class="row">
		<div class="col">
			<strong>Telefono:</strong><input id="telefono" type="text" name="telefono" class="form-control" value="<?php echo $pedido->telefono; ?>">
		</div>

	</div>
	<div class="row">
		<div class="col">
			<strong>Pedido:</strong><input id="pedido" type="text" name="pedido" class="form-control" value="<?php echo $pedido->pedido; ?>">
		</div>
	</div>
	<div class="row">
		<div class="col">
			
			<strong>Direccion:</strong><input id="direccion" type="text" name="direccion" class="form-control" minlength="" maxlength="50" value="<?php echo $pedido->direccion; ?>">
		</div>
		
       <div class="row">
		<div class="col">
			<strong>Estado Pedido</strong>
			<select id="Estadopedido" type="text" name="Estadopedido" class="form-select" value="<?php echo $pedido->Estadopedido;?>">
				<option>En Espera</option>
				<option>Aprobado</option>
			</select> 
		</div>

	<div class="row mt-3 justify-content-center">
		<div class="col-auto">
			<button type="submit" name="submit" class="btn btn-success btn-lg">Guardar</button>
			<button type="submit" name="cancelar" class="btn btn-success btn-lg">Cancelar</button>

		</div>
	</div>
	</section>
	</form>
</body>
</html>