  <?php
  
     session_start();

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Tableau Mois</title>
</head>
<body>
     <form action="controllers.php" method="POST">
     <label for="mois">Choisir une langue</label><br><br>
      <select name="mois">
          <option value="Français">Français</option>
          <option value="Anglais">Anglais

          </option>
      </select> <br><br>
        <input type="submit" name="valider" value="Envoyez">
       </form>
     
     <?php

  include_once "functions.php";
  if(isset($_SESSION['mois'])){ 
        

    if($_SESSION['mois'] == 'Français'){
    moisFrancais();
  }else{
  moisAnglais();
  
  }
  }
   ?>

</body>
</html>


