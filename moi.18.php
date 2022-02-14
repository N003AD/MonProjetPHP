<?php
   session_start();
extract($_POST);
$color="green";
    // $n=12;
$_SESSION['i'] = isset($_SESSION['i']) ? $_SESSION['i']+1:1; // Ternaire
      $i = $_SESSION['i'];

 if(isset(($btn))){
     $_SESSION['n'] = $corrige;
     echo $corrige;
    
        $n++; 
    echo "Bonjour";
     if(empty(($corrige))){
  $color ="red";
     }else{
         $n = 1;
     }
}
var_dump($_SESSION);
  $msg = ($i > $_SESSION['n'] ) ? "disabled" : ""; // Ternaire
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
<form action="" method="POST">
        <label for="">Text <?= $i ?></label><br>
        <input name="corrige" <?= $msg ?> style="border:20px solid <?= $color ?>"><br><br>
        <small><?= $msg ?></small>
        <input type="submit" name ="btn" value="Envoyer">
    </form>
</body>
</html>