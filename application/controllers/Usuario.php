<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Usuario_model");
		$this->load->library('session');

	}

	public function index(){
		$this->session->set_flashdata("error_auth", true);
		$this->iniciar_sesion();

	}
	public function iniciar_sesion(){
		$this->session->set_flashdata("error_auth", true);
		$this->load->view('usuario/iniciar_sesion');
	}

	public function guardar_usuario(){
		$data = array(
			'Nombre' => $this->input->post("nombre"),
			'Apellido' => $this->input->post('apellido'),
			'correo' => $this->input->post('correo'),
			'password' => $this->input->post('pwd'),
		);
		if ( $this->Usuario_model->agregar($data) >= 1){
			redirect(base_url().'iniciar-sesion');
		}else{
			redirect(base_url().'registrar-usuario');
		}
		/*var_dump($_FILES);
		$config['upload_path'] = './assets/archivos/';
		$config['allowed_types'] = 'jpg|png';
		 $config['file_name']			= 'persona_id_'.$this->input->post("cc");
		$config['max_size']     = '1024';
		$config['max_width'] = '2000';
		$config['max_height'] = '3000';
		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('foto')){
			var_dump($this->upload->display_errors());
		}else{
			 var_dump($this->upload->data());
		}*/

	}

	public function registrar_usuario_view(){
		$this->load->view('usuario/registrar');
	}

	public function autenticacion(){
		
		$usuario = $this->Usuario_model->autententicar($this->input->post('correo'),$this->input->post('pwd'));
		if($usuario){
			redirect(base_url('Pagina'));
		}else
		{
			$this->session->set_flashdata("error_auth", true);
			redirect(base_url('iniciar-sesion'));
		}

	}
    public function pagina(){
    $this->load->view('usuario/pagina');
  }
}
  class Registro extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Registrop_model");
	}
	public function autenticacionp(){
		$pedidos = $this->$Registrop_model->autententicarp($this->input->post('nombre'),$this->input->post('telefono'),$this->input->post('pedido'),$this->input->post('direccion'));
		if($pedidos){
			//Ir a la pagina
		}else{

			redirect(base_url('Pedido'));
		}
	}
	public function guardar_pedido(){
		$data = array(
			'Nombre' => $this->input->post("nombre"),
			'Telefono' => $this->input->post('telefono'),
			'Pedido' => $this->input->post('pedido'),
			'Direccion' => $this->input->post('direccion'),
			'Estadopedido' => $this->input->post('Estadopedido')
		);
		if ( $this->Registrop_model->agregar($data) >= 1){
			redirect(base_url().'dashboard');
		}else{
			redirect(base_url().'registrar-pedido');
		}	
      }
	  public function registrar_pedido_view(){
		$this->load->view('usuario/pedidos');
	} 




}

