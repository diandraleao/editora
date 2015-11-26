<?php
    
    class Publicacao{
        
        public $ds_titulo_publicacao, $ds_publicacao, $dt_publicacao, $id_categoria;
        
        public function __construct ($titulo, $descricao, $data, $categoria) {
            
            $this->ds_titulo_publicacao = htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8');
            $this->ds_publicacao = htmlspecialchars($descricao, ENT_QUOTES, 'UTF-8');
            $this->dt_publicacao = $data;
            $this->id_categoria = $categoria;

        }
        
    }
    