<?php
    
    include_once("publicacoesINTERFACE.php");
    include_once("categoriasCLASS.php");
    
    class Teses extends Academico implements Publicacoes {
        
        public $id_publicacao, $nm_autor, $nm_orientador, $nm_co_orientador, $id_pdf;
        
        public function __construct ($autor, $orientador, $coorientador, $pdf){
                     
            $this->nm_autor = $autor;
            $this->nm_orientador = $orientador;
            $this->nm_co_orientador = $coorientador;
            $this->id_pdf = $pdf;

        }

        /* seta o id do registro relacionado à tese na TB_Publicações para persistir como chave estrangeira na TB_Teses */

        public function set_id_publicacao($id){

            $this->id_publicacao = $id;
        }
    }