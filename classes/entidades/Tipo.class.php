<?php 

    class Tipo{

        private $idTipo;
        private $descTipo;
        private $obsTipo;



        public function getIdTipo(){
            return $this->idTipo;
        }
        public function setIdTipo($idTipo){
            $this->idTipo = $idTipo;
        }


        public function getDescTipo(){
            return $this->descTipo;
        }
        public function setDescTipo($descTipo){
            $this->descTipo = $descTipo;
        }

    

        public function getObsTipo(){
            return $this->obsTipo;
        }
        public function setObsTipo($obsTipo){
            $this->obsTipo = $obsTipo;
        }

    }