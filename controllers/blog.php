<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Blog extends CI_Controller {
        
        
        public function index(){
            
            $this->load->view('Blog/index');
        }
        
        public function disciplinas(){
            
            $this->load->view('Blog/disciplinas');
        }
        
        public function contato(){
            
            $this->load->view('Blog/contato');
        }
        
        public function sobre(){
            
            $this->load->view('Blog/sobre');
        }
    }
    
    