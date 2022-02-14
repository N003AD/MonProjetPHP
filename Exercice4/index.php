
        <!-- Exercice 4 : Générer deux nombres puis faire leur permutation.On
             affichera les deux nombres avant et après permutations. -->
  <link rel="stylesheet" href="Css/style.css">
   <div class="carre">
    <?php
        
      include_once("functions.php");

       $a = rand(1, 100);

       $b=rand(1,100);

       permutation($a,$b);
       
    ?>
</div>