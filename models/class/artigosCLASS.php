<?php
   
    include_once("publicacoesINTERFACE.php");
    include_once("categoriasCLASS.php");
   
    class Artigos extends Cientifico implements Publicacoes {
        
        public $id_publicacao, $id_pdf;	

        public function __construct ($pdf){
            
            $this->id_pdf = $pdf;
        }

        /* seta o id do registro relacionado ao artigo na TB_Publicações para persistir como chave estrangeira na TB_Artigos */

        public function set_id_publicacao($id){

            $this->id_publicacao = $id; 
        }
    }