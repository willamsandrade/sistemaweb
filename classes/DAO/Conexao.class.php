<?php

    class Conexao {
        private $usuario = "root";
        private $senha = "";
        private $caminho = "localhost";
        private $banco = "prova";
        private $con;

        public function __construct() {
            $this->con = mysqli_connect($this->caminho, $this->usuario, $this->senha) 
                        or die("Conexão com o banco de dados Falhou!" . mysqli_error($this->con));
            mysqli_select_db($this->con, $this->banco) 
                        or die("Seleção da base de dados falhou!" . mysqli_error($this->con));
            mysqli_set_charset($this->con, 'utf8');
        }

        public function getCon() {
            return $this->con;
        }

    }

?>