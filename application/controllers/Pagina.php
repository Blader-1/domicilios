<?php
class Pagina extends CI_Controller{

    function __construct(){
		parent::__construct();
		//$this->load->model("Usuario_model");
    }//cierre de la funcion

    public function index(){
        $this->load->view('usuario/pagina');


    }//cierre de la funcion publica

}//fin de la clase Pagina
