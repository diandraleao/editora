<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    include('verifica.php');
    
    class Admin extends Verifica{
        
        
        
        /* Principal __________________________________________________*/ 
        
        
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
        
        
       /* Artigos ______________________________________________________*/ 
        
        
        public function adicionarartigo(){
            

            if(empty($_POST)){

                 $this->load->view('Admin/add-artigo');

            }else{

                // Carregando arquivo

                $fileRandomName = (string)date('y/m/d');
                $fileRandomName .= (string)rand(1,100000);
                
                $config['upload_path'] = './upload';
                $config['file_name']  = $fileRandomName;
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '0';

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('arquivo')){

                    $error = $this->upload->display_errors();

                }else{

                    $updateData = $this->upload->data();
                    $fileUpdateName = $updateData['file_name'];
                }

                // Carregando factory e model

                require_once APPPATH."/models/class/publicacoesFactory.php";

                $this->load->model('artigos_dao','artigos');

                $fabrica = new PublicacoesFactory();
            
                $publicacao = $fabrica->criar_publicacao(/**/$this->input->post("tipo"),/**/$this->input->post("titulo"),$this->input->post("descricao"),$this->input->post("data"),/**/'','','',$fileRandomName);                
                $this->artigos->insert($publicacao);

                // Carregando view de sucesso

                $data = array(

                    'adicionar' => 'adicionarartigo',
                    'listar' => 'listarartigos'

                    );

                $this->load->view('Admin/sucesso',$data);
            }


        }//fim function
        
        public function listarartigos(){

            $this->load->model('artigos_dao','artigos');
            
            $lista = $this->artigos->get_all_id_title_date();

            $data = array(

                'publicacoes' => $lista,
            );

            $this->load->view('Admin/listar-artigos',$data);

        }//fim function

        public function deletarartigo($id){
            
            if(is_numeric($id)){
                
                $this->load->model('artigos_dao','artigos');
                $this->artigos->delete($id);
                
            }else{
                
                echo "erro";
            }
        }

        
        /* Dissertações _________________________________________________ */
             
        public function adicionardissertacao(){


           if(empty($_POST)){

                 $this->load->view('Admin/add-dissertacao');

           }else{

                // Carregando arquivo

                $fileRandomName = (string)date('y/m/d');
                $fileRandomName .= (string)rand(1,100000);
                
                $config['upload_path'] = './upload';
                $config['file_name']  = $fileRandomName;
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '0';

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('arquivo')){

                    $error = $this->upload->display_errors();

                }else{

                    $updateData = $this->upload->data();
                    $fileUpdateName = $updateData['file_name'];
                }

                // Carregando factory e model

                require_once APPPATH."/models/class/publicacoesFactory.php";

                $this->load->model('dissertacoes_dao','dissertacoes');

                $fabrica = new PublicacoesFactory();
            
                $publicacao = $fabrica->criar_publicacao(/**/$this->input->post("tipo"),/**/$this->input->post("titulo"),$this->input->post("descricao"),$this->input->post("data"),/**/$this->input->post("autor"),$this->input->post("orientador"),$this->input->post("coorientador"),$fileRandomName);
                $this->dissertacoes->insert($publicacao);

                // Carregando view de sucesso

                $data = array(

                    'adicionar' => 'adicionardissertacao',
                    'listar' => 'listardissertacoes'

                    );

                $this->load->view('Admin/sucesso',$data);

            }

        }
        
        public function listardissertacoes(){

            $this->load->model('dissertacoes_dao','dissertacoes');
            
            $lista = $this->dissertacoes->get_all_id_title_date();

            $data = array(

                'publicacoes' => $lista,
            );

            $this->load->view('Admin/listar-dissertacoes',$data);


        }
        
        public function deletardissertacao($id){
            
             if(is_numeric($id)){
                
                $this->load->model('dissertacoes_dao','dissertacoes');
                $this->dissertacoes->delete($id);
                
             }else{
                 
                 echo "erro";
             }
        }
        
        
        /* Teses _________________________________________________________*/ 
        
        public function adicionartese(){


           if(empty($_POST)) {

                $this->load->view('Admin/add-tese');

           }else{

                // Carregando arquivo

                $fileRandomName = (string)date('y/m/d');
                $fileRandomName .= (string)rand(1,100000);
                
                $config['upload_path'] = './upload';
                $config['file_name']  = $fileRandomName;
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '0';

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('arquivo')){

                    $error = $this->upload->display_errors();

                }else{

                    $updateData = $this->upload->data();
                    $fileUpdateName = $updateData['file_name'];
                }

                // Carregando factory e model

                require_once APPPATH."/models/class/publicacoesFactory.php";

                $this->load->model('teses_dao','teses');

                $fabrica = new PublicacoesFactory();
            
                $publicacao = $fabrica->criar_publicacao(/**/$this->input->post("tipo"),/**/$this->input->post("titulo"),$this->input->post("descricao"),$this->input->post("data"),/**/$this->input->post("autor"),$this->input->post("orientador"),$this->input->post("coorientador"),$fileRandomName);
                $this->teses->insert($publicacao);

                // Carregando view de sucesso

                $data = array(

                    'adicionar' => 'adicionartese',
                    'listar' => 'listarteses'

                    );

                $this->load->view('Admin/sucesso',$data);
            }
            
        }
        
        public function listarteses(){

            $this->load->model('teses_dao','teses');
            
            $lista = $this->teses->get_all_id_title_date();

            $data = array(

                'publicacoes' => $lista,
            );

            $this->load->view('Admin/listar-teses',$data);

        }
        
        public function editartese($id){
            
            $this->load->model('teses_dao','teses');
            
            $data = array(
                
                'teses' => $this->teses->get_All($id)
            ); 
            
            $this->load->view('editartese',$data);
            
        }
        
        public function deletartese($id){
        
            if(is_numeric($id)){
                
                $this->load->model('teses_dao','teses');
                $this->teses->delete($id);
                
            }else{
            
                echo "erro";
                 
            }
        }

        /*_______________________________________________________________*/
        
        
    }
    
    