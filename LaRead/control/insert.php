<?php
	include '../model/BDD.php';
	include '../model/article.php';
	if (isset($_POST['title']) && isset($_POST['auteur']) && isset($_POST['Desc'])){
	 	$article = new article(null,$_POST['title'],$_POST['auteur'],$_POST['Desc'],date("			Y-m-d H:i:s"));
	 	
	 	$article->setData();
	 	header("Location: ../View/Home.php");
	}
	
?>