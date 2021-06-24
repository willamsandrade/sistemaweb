<?php 

    class TipoDAO{

        private $conexao;

    	public function __construct(){
       		$this->conexao = new Conexao(); //
    	}

    	private function executarBD( $sql ){ //Executar comandos sql
       		return mysqli_query( $this->conexao->getCon(), $sql );
        }

        //Criar Métodos CRUD
        //Método Ler Todos os Registros
        public function lerTodos($idTipo = 0){
            if($idTipo == 0){
                $sql = "SELECT * FROM tipo ORDER BY descTipo ASC";
            }else{
                $sql = "SELECT * FROM tipo WHERE idTipo <> $idTipo ORDER BY descTipo ASC";
            }
            return $this->executarBD( $sql ); //Executar e retornar os tipos cadastrados 
        }


        //Exibir dados de um tipo
        public function dadosTipo($idTipo){
            $sql = "SELECT * FROM tipo WHERE idTipo = $idTipo";
            return $this->executarBD( $sql ); //retornar os dados do tipo
        } 


        //Inserir no banco de dados
        public function inserir($Tipo){
            $sql = "INSERT INTO
                tipo (descTipo, obsTipo)
                    VALUES
                        (
                        '" . $Tipo->getDescTipo() . "',
                        '" . $Tipo->getObsTipo() . "'
                        )";

            if( $this->executarBD( $sql ) ){
                return true; 
            }else{
                return false;
            }   
        }



        //Atualizar Tipo no banco de dados
        public function editar($Tipo){
            $sql = "UPDATE tipo 
                                 SET  descTipo = '". $Tipo->getDescTipo() ."',
                                      obsTipo = '". $Tipo->getObsTipo() ."'
                                          WHERE idTipo = " . $Tipo->getIdTipo(); 

            if( $this->executarBD($sql) ){
               return true;
            }else{
               return false;   
            }
         }



         //Deletar Tipo no banco de dados
         public function deletar($Tipo){
            $sql = "DELETE FROM tipo WHERE idTipo = " . $Tipo->getIdTipo();	
            if( $this->executarBD($sql) ){
               return true;
            }else{
               return false;   
            }
         }

    }