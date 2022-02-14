
<?php
    
    function Somme_Deux_Nombre(int $nbr1, int $nbr2):int{
        return ($nbr1 + $nbr2);
    }


    function Exponentiel_Deux_Nombre($nbr1,$nbr2){
        return pow($nbr1, $nbr2);
     }

    function Difference_Deux_Nombre(int $nbr1, int $nbr2):int{
        return ($nbr1 - $nbr2);
    }

    function Produit_Deux_Nombre(int $nbr1, int $nbr2):int{
        return ($nbr1 * $nbr2);
    }

    function Modulo_Deux_Nombre(int $nbr1, int $nbr2):int{
        return ($nbr1 % $nbr2);
    }

    function Division_Deux_Nombre(int $nbr1, int $nbr2):float{
        return ($nbr1 / $nbr2);
    }
    

    function carre_Deux_Nombre(int $nbr1, int $nbr2):float{
        return pow($nbr1, 2) + pow($nbr2, 2);
    }
?>