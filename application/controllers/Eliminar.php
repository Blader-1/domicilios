<?php
class Eliminar extends CI_Controller{

    function __construct(){
		parent::__construct();
		$this->load->model("Registrop_model");
    }//cierre de la funcion

    public function eliminar_pedido($id)
    {
        $del = $this->Registrop_model->eliminar($id);
        redirect(base_url().'gestionp-view'); 
    }

}//fin de la clase Pagina
