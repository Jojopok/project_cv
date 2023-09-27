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
       include "_navbar.php"; 
      ?>
    </header>
    <main>
      <div>
      <?php
       include "_profil.php"; 
      ?>
      </div>
      <div>
      <?php
       include "_competences.php"; 
      ?>
      </div>
      <div>
      <?php
       include "_experiences.php"; 
      ?>
      </div>
      <div>
      <?php
       include "_formation.php"; 
      ?>
      </div>
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
