<?php
    
    include_once("publicacoesINTERFACE.php");
    include_once("categoriasCLASS.php");
    
    class Dissertacoes extends Academico implements Publicacoes {
        
        public $id_publicacao, $nm_autor, $nm_orientador, $nm_co_orientador, $id_pdf;
        
        public function __construct ($autor, $orientador, $coorientador, $pdf){
            
            $this->nm_autor = htmlspecialchars($autor, ENT_QUOTES, 'UTF-8');
            $this->nm_orientador = htmlspecialchars($orientador, ENT_QUOTES, 'UTF-8');
            $this->nm_co_orientador = htmlspecialchars($coorientador, ENT_QUOTES, 'UTF-8');
            $this->id_pdf = $pdf;

        }

        /* seta o id do registro relacionado à dissertação na TB_Publicações para persistir como chave estrangeira na TB_Dissertacoes */

        public function set_id_publicacao($id) {

            $this->id_publicacao = $id;
        }
        
    }
    