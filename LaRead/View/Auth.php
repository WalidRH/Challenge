<?php
include 'Header.php';
/*Containt*/
?>
<main class="mdl-layout__content">
        <div class="site-content">
          <div class="mdl-grid site-max-width">
            <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp page-content">
              <div class="mdl-card__title">
                <h1 class="mdl-card__title-text">Sign in</h1>
              </div>
              <div class="mdl-card__media"><img class="article-image" src="img/contact.jpg" border="0" alt="Contact">
              </div>
              <div class="mdl-grid site-copy">
                <div class="mdl-cell mdl-cell--12-col"><div class="mdl-card__supporting-text">
  <p>Please write your Login and password</p>
  <form action="https://formspree.io/email@example.com" method="POST" class="form-contact">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" name="name">
          <label class="mdl-textfield__label" for="Name">Login...</label>
          <span class="mdl-textfield__error">Letters and spaces only</span>
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="text" id="Email" name="_replyto">
          <label class="mdl-textfield__label" for="Email">Password...</label>
      </div>
      
      <p>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
              Submit
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