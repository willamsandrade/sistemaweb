<?php
    class UsuarioDAO{

        private $conexao;

    	public function __construct(){
       		$this->conexao = new Conexao();
    	}

    	private function executarBD( $sql ){ //Executar comandos sql
       		return mysqli_query( $this->conexao->getCon(), $sql );
        }


        private function crip($senhaUser){ //Hash de senha
            return sha1($senhaUser);     
         }

        //Métodos CRUD
        //Método Ler Todos os Registros

        //Recuperar todos os Usuários cadastrados no banco de dados
        public function lerTodos($idUser = 0){
            if($idUser == 0){
                $sql = "SELECT * FROM usuario ORDER BY nomeUser ASC, sobreUser ASC";
            }else{
                $sql = "SELECT * FROM usuario WHERE idUser <> $idUser ORDER BY nomeUser ASC, sobreUser ASC";
            }
            return $this->executarBD( $sql ); //Executar e retornar os usuarios cadastrados 
        }

        //Retorna dados de um usuário específico
        public function dadosUsuario($idUser){
            $sql = "SELECT * FROM usuario WHERE idUser = $idUser";
            return $this->executarBD( $sql ); //retornar os dados do tipo
        }

        //Inserir Usuário no banco de dados
        public function inserir($Usuario){
            $crip = $this->crip( $Usuario->getSenhaUser() );
            $sql = "INSERT INTO usuario (nomeUser, sobreUser, emailUser, senhaUser, idTipo) 
            VALUES (

                nomeUser = '" . $Usuario->getNomeUser() .  "',
                sobreUser = '" . $Usuario->getSobreUser() .  "',
                emailUser = '" . $Usuario->getEmailUser() .  "',
                senhaUser = '" . $crip .  "',
                idTipo = '" . $Usuario->getIdTipo() .  "'
            )";
            if( $this->executarBD( $sql ) ){
                return true; 
            }else{
                return false;
            }   
        }

        //Atualizar Usuário no banco de dados
        public function editar($Usuario){
            $sql = "UPDATE usuario 
                                 SET  nomeUser = '". $Usuario->getNomeUser() ."',
                                      sobreUser = '". $Usuario->getSobreUser() ."',
                                      emailUser = '". $Usuario->getEmailUser() ."',
                                      idTipo = '". $Usuario->getIdTipo() ."'
                                          WHERE idUser = " . $Usuario->getIdUser(); 
            if( $this->executarBD($sql) ){
               return true;
            }else{
               return false;   
            }
         }

         //Deletar Usuário no banco de dados
         public function deletar($Usuario){
            $sql = "DELETE FROM usuario WHERE idUser = " . $Usuario->getIdUser();	
              if( $this->executarBD($sql) ){
               return true;
            }else{
               return false;   
            }
         }

         //Logar no sistema
         public function logar($emailUser, $senhaUser){ 
            $crip =  $this->crip($senhaUser);
            $sql = "SELECT * FROM usuario 
                                WHERE emailUser = '$emailUser' 
                                AND senhaUser = '$crip' ";
            if( mysqli_num_rows( $this->executarBD( $sql ) ) > 0 ){
              return true;
            }else{
              return false;
            }
         }

    }