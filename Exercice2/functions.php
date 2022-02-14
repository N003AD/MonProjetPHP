<!--
    Exercice 2 : Générer la longueur et la largeur en utilisant la fonction
  rand() puis calculer et afficher le périmètre,la surface et la diagonale. -->

<?php
    //Fonctions 
    function perimetre(int $l, int $L):int{
        return (($l+$L)*2); 
    }
    function surface(int $l, int $L):int{
        return ($l*$L); 
    }
  
    function diagonale(int $l, $L):float{
        return sqrt( pow($l,2)+ pow($L,2));
    }

?>