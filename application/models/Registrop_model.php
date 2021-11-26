<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Registrop_model extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->library("mongodb");
			$this->db = $this->mongodb->db()->pedidos;
		}

		function guardar_pedidos($data_pedido){
			
			$result = $this->db->insertOne($data_pedido);
			return $result->getInsertedCount();
		}
        
		public function getAllPedido(){
            return $this->db->find(); 
        }
public function getAllPedido2(){
            return $this->db->find(); 
        }

         public function getOnePedido($id){
            return $this->db->findOne(array(
                '_id' => $this->mongodb->getObjetId($id)
            ));
          }

        public function eliminar($id)
        {
            $res = $this->db->deleteOne(array('_id' => $this->mongodb->getObjetId($id)));
            
        }

       function guardarPedido($datos){
            $datos_guardar = array(
                "nombre" => $datos["nombre"],
                "telefono" => $datos["telefono"],
                "pedido" =>  $datos["pedido"],
                "direccion" => $datos["direccion"],
                "Estadopedido" => $datos["Estadopedido"]

            );
            $resultado = $this->db->insertOne($datos_guardar);
            if($resultado->getInsertedCount() > 0){
                return array("guardado" => true,"pedido_id" => $resultado->getInsertedId());
            }else{
                return array("guardado" => false);
            }
        }

        function actualizarPedido($id, $datos){
            //Buscar por Id
            $resultado = $this->db->updateOne(
                array(
                    "_id" =>  $this->mongodb->getObjetId($id)
                ),
                array(  
                    '$set' => $datos
                )
            );
            return $resultado->getModifiedCount();
        }
}