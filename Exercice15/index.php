

<?php
  extract($_POST);
 $color="green";
  if(isset([$btn])){ 
      if(empty([$corrige])){
   $color ="red";
      }
}

?>

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
        <label for="">Text</label><br>
        <textarea name="corrige" id="" cols="30" rows="10" style="border:20px solid <?= $color ?>"></textarea><br><br>
        <input type="submit" name ="btn" value="Envoyer">
    </form>
</body>
</html>



////////
