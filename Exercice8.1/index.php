<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controllers.php" method="POST">
    <input type="text" name="nbr"><br><br>
    <input type="submit" name="valider">
    </form>

    

    <?php 
    if(isset($_SESSION['nbr'])){

      echo $_SESSION['nbr'];
  
      for ($i = 1; $i<= $_SESSION['nbr']; $i++) {
        echo "<ul><li>" .$i ."</li></ul>"; // echo "<li>"."<input type='text' name='nbr'>"."</li>";
       }
       
    }
    session_unset();
    
    ?>
   


</body>
</html>

<!-- Exercice 8: Entrer un nombre N à l’aide d’un formulaire puis générer une
liste ul dont les li affichent toutes les valeurs entre 1 et N. N est positif. -->