<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    session_start();
    ?>
    <form action="controllers.php" method="post">
    <label>Entrez un nombre:</label>
     <input type="text" name="nbre" value="
     <?php if(!isset($_SESSION['error']['nbre']) && isset($_SESSION['post']) ) 
      echo  $_SESSION['post']['nbre']; else ''  ?>">
      
      <?php if(isset($_SESSION['error']['nbre'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['nbre'] ?></span>
            <?php session_unset(); endif?> <br>
      <input type="submit" value="valider" name="valider" >

    </form>

<?php
    
?>
</body>
</html>