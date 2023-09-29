<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CV Groot</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <header>
      <?php
       include "_navBar.php"; 
      ?>
    </header>
    <main>
      <div id="profil">
      <?php
       include "_profil.php"; 
      ?>
      </div>
      <div id="competences">
      <?php
       include "_competences.php"; 
      ?>
      </div>
      <div id="experiences">
      <?php
       include "_experiences.php"; 
      ?>
      </div>
      <div id="formation">
      <?php
       include "_formation.php"; 
      ?>
      </div id="loisirs">
      <div>
      <?php
       include "_loisirs.php"; 
      ?>
      </div>
    </main>
    <footer>
    <?php
       include "_footer.php"; 
      ?>
    </footer>
  </body>
</html>
