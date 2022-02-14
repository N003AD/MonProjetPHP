<?php
extract($_POST);
$color="green";
 if(isset(($btn))){
        $n 
    
     if(empty(($corrige))){
  $color ="red";
     }else{
         $n = 1;
     }
}




?>
<form action="" method="POST">
        <label for="">Text <?= $n ?></label><br>
        <input name="corrige" style="border:20px solid <?= $color ?>">><br><br>

        <input type="submit" name ="btn" value="Envoyer">
    </form>