<link rel="stylesheet" href="Css/style.css">
       <div class="carre">
<?php
    // Exercice 3 : Générer deux nombres puis calculer et afficher: 
    include_once "functions.php";
    
          // Somme de deux nombres
    $nbr1 = rand(1,50);
    echo "Le premier nombre est: $nbr1 <br>";

    $nbr2 = rand(1,50);
    echo "Le premier nombre est: $nbr2 <br>";
  

    $somme = Somme_Deux_Nombre($nbr1, $nbr2); // $nbr1 + $nbr2;
    echo "La somme des deux nombres est: $somme .<br><br><br>";


    $exponentiel = pow($nbr1, $nbr2);
    echo "L'exponentiel des deux nombres est: $somme .<br><br><br>";

          // Différence de 2 nombres
    $difference = Difference_Deux_Nombre($nbr1, $nbr2); //$nbr1 - $nbr2;
    echo "La différence des deux nombres est: $difference .<br><br><br>";


       // Produit de 2 nombres
    $produit =  Produit_Deux_Nombre($nbr1, $nbr2); //$nbr1 * $nbr2;
    echo "Le produit des deux nombres est: $produit .<br><br><br>";


          // Modulo de 2 nombres
    $modulo = Modulo_Deux_Nombre($nbr1, $nbr2); // $nbr1 % $nbr2;
    echo "Le modulo des deux nombres est: $modulo .<br><br><br>";

        // Division de 2 nombres
    $division = Division_Deux_Nombre($nbr1, $nbr2); //$nbr1 / $nbr2;
    echo "La division des deux nombres est: $division .<br><br><br>";


     // Carre de 2 nombres
     $carre =  pow($nbr1, 2) + pow($nbr2, 2);
     echo "Le carre des deux nombres est: $carre .<br><br><br>";
     ?>  
     </div> 
</html>