<?php
class BDD
{
		//Attributs
		private $PDO;
		
		//Constructeur / Desctructeur
		public function __construct(){
			try
			      {
			       $this->PDO = new PDO('mysql:host=localhost;dbname=laread', 'root', 'root');
			      $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			      
			      }
			    catch(Exception $e)
			     {
			      die('Erreur : '.$e->getMessage());
			     }
			
		}
		
		//Methodes
		function deconnexionBdd(){
			BDD::$PDO=NULL;
			unset(BDD::$PDO);
		}
		
		function requestInsert($req){
                
                        $stm= $this->PDO->Prepare($req);
                       
                        $stm->execute();
                        
                       return  $stm;
			
		}
		
		function requestSelect($req){
			$reponse=$this->PDO->query($req);
			return $reponse;
		}
		function getPDO(){
			return $this->PDO;
		}
}