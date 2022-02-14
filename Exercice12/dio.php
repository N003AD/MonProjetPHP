<?php

 
    function moisFrancais(){
          /* un array des mois Français*/ 
    $monthFrench = array( 1 => 'Janvier',
    2 => 'Avril',
    3 => 'Juillet',
    4 => 'Octobre',
    5 => 'Février',
    6 => 'Mai',
    7 => 'Août',
    8 => 'Novembre',
    9=> 'Mars',
    10=> 'Juin',
    11 => 'Septembre',
    12 => 'Décembre'
    );

   echo "<table>";
      echo "<tr>";
    echo "<td>";

    foreach( $monthFrench as $x=>$x_value){
        echo  $x_value; // "" . $x . ", Value=" .
        echo "<br>";

        echo "</tr>";
      echo "<td>";
}
echo "</table>";
    }
   

    // Mois Anglais

    /* un array des mois Anglais */ 
   function moisAnglais(){
       /* un array des mois Anglais */ 
    $monthEnglish= array(1=>'January',
    2 =>'April',
    3 =>'July',
    4 =>'October',
    5 =>'February',
    6 =>'May',
    7 =>'August', 
    8 =>'November',
    9 =>'March',
    10 =>'June',
    11 =>'September',
    12 =>'Decembre'
   );

   echo "<table>";
      echo "<tr>";
    echo "<td>";

    foreach( $monthEnglish as $x=>$x_value){
        echo  $x_value; // "" . $x . ", Value=" .
        echo "<br>";

        echo "</tr>";
      echo "<td>";
}
echo "</table>";
    }
   

   

///


?>
