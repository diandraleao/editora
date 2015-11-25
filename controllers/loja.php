<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Loja extends CI_Controller {
        
        public function getForm(){
            
            require_once APPPATH."/models/factory/publicacoesFactory.php";
            $this->load->model('produtoDAO');
            $f = new PublicacoesFactory();
            
            $prod = $f->createProd($this->input->post("categoria") = 0 ,$this->input->post("titulo") = '',$this->input->post("descricao") = '',$this->input->post("data") = '',$this->input->post("texto") = '',$this->input->post("tipo") = '',$this->input->post("autor") = '',$this->input->post("orientador") = '',$this->input->post("coorientador") = '',$this->input->post("doi") = 0,$this->input->post("isnn") = 0);
            $this->produtoDAO->insert($prod);
        }
    }