<?php
$mongo = new Mongo();
$db = $mongo->selectDB("domicilios");
$domicilios = $mongo->selectCollection($db,"pedidos");

//////////////////////////////////////
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$pedido = $_POST["pedido"];
$direccion= $_POST["direccion"];
$Estadopedido= $_POST["Estadopedido"];



//////////////////////////////////////

$nuevopedido = array("Nombre"=>$nombre,"telefono"=>$telefono,"pedido"=>$pedido,"direccion"=>$pedido);
$domicilios->insert($nuevopedido);

header("Refresh: 0;url=index.php?mensaje=2")
?>