<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
    
    class Artigos_dao extends CI_Model {
        
        public function insert(array $publicacao){


        	$this->db->insert('TB_Publicacoes',$publicacao[0]);

        	$publicacao[1]->set_id_publicacao($this->db->insert_id());

            $this->db->insert('TB_Artigos', $publicacao[1]);
        }

        public function get_all_id_title_date(){


        	$this->db->select('TB_Publicacoes.id_publicacao, TB_Publicacoes.ds_titulo_publicacao, TB_Publicacoes.dt_publicacao');

			$this->db->from('TB_Artigos');

			$this->db->join('TB_Publicacoes', 'TB_Publicacoes.id_publicacao = TB_Artigos.id_publicacao');

			$this->db->order_by('TB_Publicacoes.id_publicacao');
			
			return $this->db->get()->result_array();

        }
        
         public function delete($id){
            
            $tables = array('TB_Artigos','TB_Publicacoes');
            $this->db->where('id_publicacao', $id);
            $this->db->delete($tables);
            
        }
    }