<?php

    function permutation(int $a,int $b):void 
    {
        echo "Avant permutaion a=$a et b=$b <br>";
        $tmp=$a;
        $a=$b;
        $b=$tmp;
        echo"Aprés permutaion a=$a et b=$b <br>";
    }

?>

