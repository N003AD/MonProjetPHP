<?php

  if(session_status() != PHP_SESSION_ACTIVE ){
    session_start();
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="controllers.php" method="POST">
        <p>valeur supérieure à 10 000
        <input type="text" name="saisi"></p>
        <input type="submit" name="valider" value="Envoyez">
    </form>

    <table>
      <?php 
    if(isset($_SESSION['tabSup'])){
      
      for ($i = 0; $i < count($_SESSION['tabSup']); $i++) {
       echo "<tr>".$_SESSION['tabSup'][$i] .'  ' ."</tr>";
       }
    }
  
    
    ?>
    </table>
    <?php if(isset($_SESSION['tabInf'])) : ?>

      <table>
    <thead>
        <tr>
            <th colspan="2">Nombre premier inferieur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <?php for ($i=0; $i < count($_SESSION['tabInf']) ; $i++) : ?>
            <td> <?php echo $_SESSION['tabInf'][$i] ?> </td>
          
            <?php endfor ?>

            
        </tr>
    </tbody>
</table>

      <?php endif ; ?>

      <!-- Sup -->

       </table>
    <?php if(isset($_SESSION['tabSup'])) : ?>

<table>
<thead>
  <tr>
      <th colspan="2">Nombre premier supérieur</th>
  </tr>
</thead>
<tbody>
  <tr>
    <?php for ($i=0; $i < count($_SESSION['tabSup']) ; $i++) : ?>
      <td> <?php echo $_SESSION['tabSup'][$i] ?> </td>
    
      <?php endfor ?>

      
  </tr>
</tbody>
</table>

<?php endif ; ?>
    
    <?php

if(session_status() == PHP_SESSION_ACTIVE ){
  session_destroy();
}

?>  
</body>
</html>