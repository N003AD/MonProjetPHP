
<?php 

function est_Vide($nbr1):bool{
    if(empty($nbr1))
    {
        return true;
    }else{
        return false;
    }
}

function est_nombre($nbr2):bool{
    if(is_numeric($nbr2)){
        return true;
    }else{
        return false;
    }
}
function est_positif($nbr1):bool{
    if($nbr1>0){
        return true;
    }else{
        return false;
    }
}

function valide($nbr3, string $key,array &$tab):void{
    if(est_Vide($nbr3)){
        $tab[$key]="Veuillez remplir ce champ"; 
        
    }else { 
        if(est_nombre($nbr3)){ // 
            if(!est_positif($nbr3)){ 
                $tab[$key]="Veuillez donner un nombre positif";
            }

        }else {
            
            $tab[$key]="Ce champ doit être un nombre";
        }
    }
        

}

function multiplication($nb):void{
    $i=1; 
    while($i<=10){
        $multi = $i * $nb;
        echo "$i * $nb = $multi <br>";
        $i++;
    }
}



?>