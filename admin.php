<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    include('verifica.php');
    
    class Admin extends Verifica{
        
        
        // Principal --------------------------------------------------
        
        
        public function index(){
            
            $this->load->view('Admin/home');
        }

        public function logout(){

            $data = array(
                'username'  => 'administrador',
                'logado' => TRUE
            );

            $this->session->unset_userdata($data);
            redirect("login");
        
        }
        
        
        // Artigos ----------------------------------------------------
        
        
        public function adicionarartigo(){
            
            var_dump($_POST);

            $this->load->view('Admin/add-artigo');

            $fileUpdateName = '';
            $random = rand(1,10000);
            $fileRandomName = (string) $random;
            

            $config['upload_path'] = './static';
            $config['file_name']  = $fileRandomName;
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '0';


                    $this->load->library('upload', $config);

                    if ( !$this->upload->do_upload('arquivo') ) {

                        $error = $this->upload->display_errors();

                    } else {

                        $updateData = $this->upload->data();
                        $fileUpdateName = $updateData['file_name'];
                    }


        }
        
        public function listarartigos(){
            
            $this->load->view('Admin/listar-artigos');
        }
        
        // Dissertações --------------------------------------------------
        
        
        public function adicionardissertacao(){
            
            $this->load->view('Admin/add-dissertacao');

        }
        
        public function listardissertacoes(){
            
            $this->load->view('Admin/listar-dissertacoes');
        }
        
        
        // Teses -------------------------------------------------------- 
        
        
        public function adicionartese(){
            
            $this->load->view('Admin/add-tese');
            
        }
        
        public function listarteses(){
            
            $this->load->view('Admin/listar-teses');
        }
 

        // -------------------------------------------------------------

        
        
    }
    
    