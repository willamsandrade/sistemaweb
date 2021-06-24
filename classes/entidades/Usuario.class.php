<?php 

  class Usuario{

    private $idUser;
    private $nomeUser;
    private $sobreUser;
    private $emailUser;
    private $senhaUser;
    private $idTipo;

    public function getIdUser(){
		return $this->idUser;
	}
	public function setIdUser($idUser){
		$this->idUser = $idUser;
	}



	public function getNomeUser(){
		return $this->nomeUser;
	}
	public function setNomeUser($nomeUser){
		$this->nomeUser = $nomeUser;
	}



	public function getSobreUser(){
		return $this->sobreUser;
	}
	public function setSobreUser($sobreUser){
		$this->sobreUser = $sobreUser;
	}



	public function getEmailUser(){
		return $this->emailUser;
	}
	public function setEmailUser($emailUser){
		$this->emailUser = $emailUser;
	}



	public function getSenhaUser(){
		return $this->senhaUser;
	}
	public function setSenhaUser($senhaUser){
		$this->senhaUser = $senhaUser;
	}
	

	public function getIdTipo(){
		return $this->idTipo;
	}
	public function setIdTipo($idTipo){
		$this->idTipo = $idTipo;
	}

  }