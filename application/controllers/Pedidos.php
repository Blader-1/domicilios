<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Registrop_model");
	}

	public function index()
	{
		$this->load->view('usuario/pedidos');
	}

   public function guardar_pedido(){
		$datap = array(
			'nombre' => $this->input->post("nombre"),
			'telefono' => $this->input->post('telefono'),
			'pedido' => $this->input->post('pedido'),
			'direccion' => $this->input->post('direccion'),
			'Estadopedido' => $this->input->post('Estadopedido')
			

		);
		
		if ($this->Registrop_model->guardar_pedidos($datap) >= 1){
			redirect(base_url().'Leer');
		}else{
			redirect(base_url().'guardar-pedido');
		} 
		}

      	public function actualizar_pedido(){
      	$datos = array(
      		'nombre' => $this->input->post("nombre"),
			'telefono' => $this->input->post('telefono'),
			'pedido' => $this->input->post('pedido'),
			'direccion' => $this->input->post('direccion'),
			'Estadopedido' => $this->input->post('Estadopedido')
		);
      	$this->Registrop_model->actualizarPedido($this->input->post('id'), $datos);
      	redirect(base_url().'gestionp-view');
      	}
}