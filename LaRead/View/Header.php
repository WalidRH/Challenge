
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/Logg.ico" /><title>La Read</title>
    <meta name="description" content="Demo of Material design portfolio template by TemplateFlip.com."/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
  </head>
  <body id="top">
     <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
     <!-- if it's Admin -->
     <?php

        if (!empty($_SESSION['id'])){
     ?>
     <a href="ADD.php" id="contact-button" class="mdl-button mdl-button--fab mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-shadow--4dp"><i class="material-icons">add</i></a>
     <?php
      }
     ?>
   
      <header class="mdl-layout__header mdl-layout__header--waterfall site-header">
        <div class="mdl-layout__header-row site-logo-row"><span class="mdl-layout__title">
            <a href="Home.php"><div class="site-logo"></div></a><span class="site-description">La Read
            </span></span></div>
        <div class="mdl-layout__header-row site-navigation-row mdl-layout--large-screen-only">
          <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font"><a class="mdl-navigation__link" href="Home.php">Home</a>
          <a class="mdl-navigation__link" href="Auth.php">Sign In</a>
          <a class="mdl-navigation__link" href="about.php">About</a>

          </nav>
        </div>
      </header>