<?php 
    
    include_once("publicacaoCLASS.php"); 
    include("artigosCLASS.php");
    include("dissertacoesCLASS.php");
    include("tesesCLASS.php");

    //Retorna um array contendo em [0] a instância de publicação e [1] a instância do tipo da publicação
    
    class PublicacoesFactory{
        

        public function criar_publicacao(/**/$tipo,/**/$titulo,$descricao,$data,/**/$autor,$orientador,$coorientador,$pdf/**/){
            
            $publicacao = array();

            switch ($tipo) {
                
                case 'artigo':

                    $publicacao[1] = new Artigos($pdf);
                    $publicacao[0] = new Publicacao($titulo,$descricao,$data,$publicacao[1]->get_categoria_id());

                    break;
                    
                case 'dissertacao':

                    $publicacao[1] = new Dissertacoes($autor, $orientador, $coorientador, $pdf);
                    $publicacao[0] = new Publicacao($titulo,$descricao,$data,$publicacao[1]->get_categoria_id());

                    break;
                    
                case 'tese':
                    
                    $publicacao[1] = new Teses($autor, $orientador, $coorientador, $pdf);
                    $publicacao[0] = new Publicacao($titulo,$descricao,$data,$publicacao[1]->get_categoria_id());


                    break;
            }
            
            
            return $publicacao;
        }
        
    }