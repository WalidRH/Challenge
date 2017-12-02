<?php
include 'Header.php';
/*Containt*/
?>
<main class="mdl-layout__content">
        <div class="site-content">
          <div class="mdl-grid site-max-width">
            <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp page-content">
              <div class="mdl-card__title">
                <h1 class="mdl-card__title-text">Add Article</h1>
              </div>
              <div class="mdl-card__media"><img class="article-image" src="img/contact.jpg" border="0" alt="Contact">
              </div>
              <div class="mdl-grid site-copy">
                <div class="mdl-cell mdl-cell--12-col"><div class="mdl-card__supporting-text">
  <p>Set Article info</p>
 <form action="../control/insert.php" method="POST" class="form-contact">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" pattern="[A-Z,a-z, ,0-9]*" type="text" id="Name" name="title">
          <label class="mdl-textfield__label" for="Name">Title</label>
          
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" name="auteur">
          <label class="mdl-textfield__label" for="Name">Author</label>
          
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <textarea class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" name="Desc" rows="10" cols="50"></textarea>
          <label class="mdl-textfield__label" for="Name">Description</label>

          
      </div>
           
      <p>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
              ADD
          </button>
      </p>
  </form>
  </div></div>
              </div>
            </div>
          </div>
        </div>


<?php
include 'Footer.php';
?>