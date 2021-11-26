<?php
class Rapidas extends CI_Controller{

    function __construct(){
		parent::__construct();
		//$this->load->model("Registrop_model");
    }//cierre de la funcion

    public function index(){
        $this->load->view('usuario/rapidas');


    }//cierre de la funcion publica

}//fin de la clase Pagina
