<?php
class Salchipapa extends CI_Controller{

    function __construct(){
		parent::__construct();
		//$this->load->model("Usuario_model");
    }//cierre de la funcion

    public function index(){
        $this->load->view('usuario/salchipapas');


    }//cierre de la funcion publica

}//fin de la clase Pagina
