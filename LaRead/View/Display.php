<?php
include 'Header.php';
/*Containt*/
include '../model/BDD.php';
include '../model/article.php';

 $article = new article();
$find = $article->search($_GET['idart']);

?>
 <main class="mdl-layout__content">
        <div class="site-content">
          <div class="container">
<div class="mdl-grid site-max-width">
    <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp welcome-card portfolio-card">
        <div class="mdl-card__title">
          <h2 class="mdl-card__title-text"><?php echo $find['titre']; ?></h2>
        </div>
        <div class="mdl-card__supporting-text">
         By <?php echo $find['auteur']; ?>
        </div>
        <div class="mdl-card__supporting-text">
          <?php echo $find['Description']; ?>
        </div>
    </div>
</div>


<?php
include 'Footer.php';
?>