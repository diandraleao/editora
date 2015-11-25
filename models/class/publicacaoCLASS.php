<?php
    
    class Publicacao{
        
        public $ds_titulo_publicacao, $ds_publicacao, $dt_publicacao, $id_categoria;
        
        public function __construct ($titulo, $descricao, $data, $categoria){
            
            $this->ds_titulo_publicacao = $titulo ;
            $this->ds_publicacao = $descricao ;
            $this->dt_publicacao = $data;
            $this->id_categoria = $categoria;

        }
        
    }
    