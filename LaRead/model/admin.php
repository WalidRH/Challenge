<?php

class admin{
		private $id;
		private $Login;
		private $pass;
		private $nom;	
	
	public function __construct($id,$Login,$pass,$nom) {
		$this->id=$id;
		$this->Login=$Login;
		$this->pass=$pass;
		$this->nom=$nom;
	}
	public function setId($id) { $this->id = $id; }
	public function getId() { return $this->id; }
	public function setLogin($Login) { $this->Login = $Login; }
	public function getLogin() { return $this->Login; }
	public function setPass($pass) { $this->pass = $pass; }
	public function getPass() { return $this->pass; }
	public function setNom($nom) { $this->nom = $nom; }
	public function getNom() { return $this->nom; }

	public function Search(){
		$bdd = new BDD();
		$rs = $bdd->requestSelect("SELECT * FROM admin WHERE Login ='".$this->Login."' AND pass ='".$this->pass."'");

		return $rs->fetch();
	}
}
?>