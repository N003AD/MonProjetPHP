<?php
function valideNombre($nbre, string $key, array &$arrError):void
{
    if(empty($nbre)){

        $arrError[$key]="veuillez saisir un nombre";
        
    }
    else{
    if(!is_numeric($nbre)){
        $arrError[$key]="vous devez saisir un nombre";
    }
    
    else{
        if($nbre<=0){
            $arrError[$key]="entrez un nombre positif";    
        }
    }
    }
}

function affichage(int $saisi):void {
    
  for($i=2;$i<$saisi;$i++){
     echo" <ul><li>$i</li></ul>";

 }


}
?>