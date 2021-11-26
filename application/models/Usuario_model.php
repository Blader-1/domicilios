<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Usuario_model extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->library("mongodb");
			$this->db = $this->mongodb->db()->usuario;

		}

		function agregar($data_usuario){
			$result = $this->db->insertOne($data_usuario);
			return $result->getInsertedCount();
		}

		function autententicar($usuario, $contrasena){
			$datos = $this->db->findOne(array(
				'correo' => $usuario,
				'password' => $contrasena
			));
			
			return $datos;
		}

	}