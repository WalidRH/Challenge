<?php
	include '../model/BDD.php';
	include '../model/admin.php';
	if(isset($_POST['name']) && isset($_POST['password']))
		if(!empty($_POST['name']) && !empty($_POST['password'])){

			$admin = new admin(null,$_POST['name'],$_POST['password'],null);
			$check = $admin->Search();
			if($check){
				session_start();
				$admin->setId($check['id']);
				$admin->setNom($check['nom']);
				$_SESSION['id']=$admin->getId();
				$_SESSION['nom']=$admin->getNom();
				header("Location: ../View/Home.php");

			}else{
				echo "<script>alert('Wrong Login/password')</script>";
			}
		}else
			echo "<script>alert('Empty field ')</script>";
			

?>