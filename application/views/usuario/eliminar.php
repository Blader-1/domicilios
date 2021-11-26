<?php
$domicilios = $domicilios();
$collection = $domicilios->pedidos;
$resultado = $collection->deleteOne(
// El criterio, algo así como where
["_id" => new MongoDB\BSON\ObjectId($id)]
);
$eliminados = $resultado->getDeletedCount();

?>