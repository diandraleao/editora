<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Principal extends CI_Controller {
        
        
        
    public function enviardados() {
	    
	    require_once APPPATH."models/class/tesesCLASS.php";
	    $this->load->model('/factory/tesesdao');	// models/Model.php
	    $m = $this->tesesdao;
	    $titulo = $_POST["titulo"];
	    $autor = $_POST["autor"];
	    $orientador = $_POST["orientador"];
	    $coorientador = $_POST["coorientador"];
	    $dt = $_POST["data"];
	    $descricao = $_POST["descricao"];
	    $arquivo = $_POST["arquivo"];
		$this->tesesdao->insert(new TB_Teses($titulo,$dt,$descricao,$autor,$orientador,$coorientador));
		//new TB_user($_POST["nome"],$_POST["email"])

	}
        
    public function listar(){
		require_once APPPATH."models/class/tesesCLASS.php";
		$this->load->model('/factory/tesesdao');
		$m = $this->tesesdao;
		$teses = $m->searchAll();
		$data ['teses'] = $teses; 	// array associativo, enchendo o data usuarios com $usuarios do banco
		$this->load->view('listar-teses',$data);
		// print_r($usuarios);
	}
        
        
        
        
        
        
        
        
        
        
    }
    
    
    
    
    