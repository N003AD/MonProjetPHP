<!--
    Exercice 2 : Générer la longueur et la largeur en utilisant la fonction
  rand() puis calculer et afficher le périmètre,la surface et la diagonale. -->


<?php
        include_once "functions.php";
       $l = rand(1,100);
       echo "La largeur est: " .$l . "<br>";
       $L = rand(1,100);
       echo "La longueur est: " .$L . "<br>";

       $per=perimetre($l,$L);
       echo "Le périmétre est: " .$per . "<br>";


       $sur=surface($l,$L);
       echo "La surface est: " .$sur . "<br>";

       $diag=diagonale($l,$L);
       
       echo "Le diagonale est: " .$diag . "<br>";


?>
