

<link rel="stylesheet" href="Css/style.css">
<div class="carre">
    
<?php
    
/* Exercice 5 : Point: Générer deux points puis calculer et afficher la distance
   entre les deux points.Un point est caractérisé par son abscisse et son Ordonnée. */

  /* La formule pour trouver la distance entre deux points s'inspire de la formule de Pythagore 
      (c2=√a2+b2) et de ses théories sur les triangles.  */
      
      include_once "functions.php";
        

      $x1 = rand(1,100);
      $y1 = rand(1,100);
      echo"Les coordonees de A sont $x1 et $y1 .<br>";
      $x2 = rand(1,100);
      $y2 = rand(1,100);
      echo"Les coordonees de B sont $y1 et $y2 .<br>";
      $dis=Distance($x1,$y1,$x2,$y2);
      echo"La distance entre les deux est $dis ";

?>   
</div>    



