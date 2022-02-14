<html>
<body>
 
<?php
include ('fonctions.php');
?>
 
<form name="premier" method="post" action="premiers.php">
<h3>Entrez un nombre : <br/></h3>
<input name="nombre" type="text"></input>
<input type="submit" name="valider" value="OK"></input>
</form>
 
<?php
if(isset ($_POST['valider'])){
    $nombre=$_POST['nombre'];
    $resultat=premier($nombre);
    if($resultat==false){
        echo $nombre.' n\'est pas un nombre premier.';
    }
    else{
        echo $nombre.' est un nombre premier.';
    }}
?>

 
</body>
</html>
