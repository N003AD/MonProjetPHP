
<?php 

    function est_nombre($saisi):bool{
        if(is_numeric($saisi)){
            $saisi=floatval($saisi);
            if($saisi>10000){
                
            return true;
            }
        }
        return false;
    }

    
function isPrime(int $number):bool {
   
    for ($i = 2; $i < intdiv($number, 2) ; $i++) {
        
        if ($number % $i == 0) {
            return FALSE;
        }
    }
 
    return TRUE;
}
 

  function affiche(array $tab){
    
    for ($i = 0; $i <count($tab); $i++) {

            echo ' '.$tab[$i] ;
    }
  }

  // Fonction nombre premier
  function premier($nbre ,array &$tab , &$moy){
      $j=0;
      $som=0;
    for ($i = 2; $i <=$nbre; $i++) {
        if (isPrime($i)) {
            $tab[$j]=$i;
            $som=$som+$i;
            $j=$j+1;
        }
    }
      $moy= intdiv($som, count($tab) );
  }


  function inferieureSuperieur($tab, $moy, &$tabInf, &$tabSup){
      $inf=0;
      $sup=0;
      
      for ($i=0; $i <count($tab) ; $i++) { 
          if($tab[$i] <= $moy){
              $tabInf[$inf]=$tab[$i];
              $inf++;
          }else {
              $tabSup[$sup]=$tab[$i];
              $sup++;
          }
      }
  }
?>


