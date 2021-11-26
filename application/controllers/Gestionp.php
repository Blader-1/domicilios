<?php
class Gestionp extends CI_Controller{

    function __construct(){
		parent::__construct();
		$this->load->model("Registrop_model");
    }//cierre de la funcion

    public function l_pedido(){
        $datos_vista = array("pedidos" => $this->Registrop_model->getAllPedido());
        $this->load->view('usuario/gestionp_view', $datos_vista);
    }
    public function l_pedidos(){
        $datos_vista = array("pedidos" => $this->Registrop_model->getAllPedido2());
        $this->load->view('usuario/verpedido', $datos_vista);
    }
    public function eliminar_pedido($id)
    {
        $del = $this->Admin_model->eliminar($id);
        $this->session->set_flashdata("delete", true);
        redirect(base_url().'dashboard-admin-modify'); 
    }

}//fin de la clase Pagina

