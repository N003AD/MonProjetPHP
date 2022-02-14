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
    <input type="text" name="nbr">
    <input type="submit" name="valider">
    </form>

      <?php
    if(isset($_SESSION['nbr'])){

      echo $_SESSION['nbr'];
  
      for ($i = 1; $i<= $_SESSION['nbr']; $i++) {
       echo "<input type='text' name='nbr' value=".$i."> .<br><br>";
       }
    }
    session_unset();
    
    ?>


</body>
</html>

<!-- Exercice 10 : Le nombre N est saisi à l’aide d’un formulaire 
et on génère les N champs inputs . N est positif.. -->