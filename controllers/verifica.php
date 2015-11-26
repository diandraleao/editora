<?php


    class Verifica extends CI_Controller{
        
        public function __construct() {

    		parent::__construct();
    
    		if ( $this->session->userdata('logado') != TRUE ) {
    		    
    			redirect("login");
    		}
            
        }
        
    }