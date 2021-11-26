<?php
class Editarp extends CI_Controller{

    function __construct(){
		parent::__construct();
	$this->load->model("Usuario_model");
    $this->load->model("Registrop_model");

    }//cierre de la funcion

    public function index(){
    

    }//cierre de la funcion publica
      public function editar_pedido($id){
        $pedido = $this->Registrop_model->getOnePedido($id);
        $this->load->view('usuario/editarp', array('pedido' => $pedido));
    }

}//fin de la clase Pagina
