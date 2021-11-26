
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recibo domicilio</title>

</head>
<body>
<table id="example" class="table table-hover">
                            <thead>
                                    <tr class="table table-dark">
                                        <th>Nombre</th>
                                        <th>Telefono</th>
                                        <th>Pedido</th>
                                        <th>Direccion</th>
                                        <th>Estado pedido</th>
                                        
                                    </tr>
                                </thead>
                                    <?php if(!empty($pedidos)): ?>
                                    <?php foreach ($pedidos as $pedido ):?>
                                <tbody class="table table-striped">
                                    <td> <?php echo $pedido->nombre; ?> </td>
                                    <td> <?php echo $pedido->telefono; ?> </td>
                                    <td> <?php echo $pedido->pedido; ?> </td>
                                    <td> <?php echo $pedido->direccion; ?> </td>
                                    <td> <?php echo $pedido->Estadopedido; ?> </td>
                                    
                                </tbody>
                            
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
</body>
</html>