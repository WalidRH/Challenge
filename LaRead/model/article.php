<?php
	class article{
		private $idart;
		private $titre;
		private $auteur;
		private $Description;
		private $date;
		public function __construct($idart,$titre,$auteur,$Description,$date){
			$this->idart = $idart;
			$this->titre = $titre;
			$this->auteur = $auteur;
			$this->Description = $Description;
			$this->date = $date;
		}
		
		public function setIdart($idart) { $this->idart = $idart; }
		public function getIdart() { return $this->idart; }
		public function setTitre($titre) { $this->titre = $titre; }
		public function getTitre() { return $this->titre; }
		public function setAuteur($auteur) { $this->auteur = $auteur; }
		public function getAuteur() { return $this->auteur; }
		public function setDescription($Description) { $this->Description = $Description; }
		public function getDescription() { return $this->Description; }
		public function setPath($path) { $this->path = $path; }
		public function getPath() { return $this->path; }
		public function setDate($date) { $this->date = $date; }
		public function getDate() { return $this->date; }
		public function search($id){
			$bdd = new BDD();
			$find = $bdd->requestSelect("SELECT * FROM article where idart = ".$this->idart."");
			return $find->fetch();
		}
		public function setData(){
			$bdd = new BDD();
			return $bdd->requestInsert("INSERT INTO article (titre,auteur,Description,dateOfInsertion)VALUES('".$this->titre."','".$this->auteur."','".$this->Description."','".$this->date."')");
		}
		/*public function getAll(){
			$bdd = new BDD();
			$find = $bdd->requestSelect("SELECT * FROM article ");
			return $find->fetch();
		}*/
	}
?>