    <?php
    //1.5
    $a=2014;
    $m=12;
    $j=31;  

    //Controle validité J M
    if ($j>31) {
    echo "il y à une erreur dans le jour";
    }
    if ($m>12) {  
    echo "il y à une erreur dans le mois";
    }


    //Si dernier jour du mois
    if ($j<31) {
    $j=$j+1;}
    else {
    if ($j==31) {
        $j=1;
        $m=$m+1;}
        if ($m==12) {
        $m==1;
        $a==$a+1;}
        
    echo "demain nous seront le $j $m $a";}



    ?>