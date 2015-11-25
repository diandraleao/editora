<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller {

	public function __construct(){
	    
		parent::__construct();
	}

	public function index(){
	    
		self::logar();
	}
	public function logar(){
	    
		$this->load->view("Admin/login");
	}

	public function auth(){

		$login = $this->input->post("login");
		$senha = $this->input->post("senha");

		if($login == "administrador" && $senha == "trabalho"){
			
			$data = array(
          		'username' => 'administrador',
          		'logado' => TRUE
            );
            
			$this->session->set_userdata($data);
			redirect("admin");
			
		}else{
			
			self::logar();
		}
	}

}