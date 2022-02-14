
<?php 

function est_Vide(int $jour):bool{
    if(empty($jour))
    {
        return true;
    }else{
        return false;
    }
}
function est_nombre($jour):bool{
    if(is_numeric($jour)){
        return true;
    }else{
        return false;
    }
}
function est_positif($jour):bool
{
    if($jour>0)
    {
        return true;
    }
    else
    {
        return false;
    }
}
  // Fonction de validation JOUR
function jourValide($jour, string $key,array &$tab):void
{
    if(est_Vide($jour))
    {
        $tab[$key]="Veuillez remplir le champ jour"; 
        
    }
    else 
    { 
        if(est_nombre($jour))
        {  
            if (!est_positif($jour))
            {
                $tab[$key]="Veuillez donner un nombre positif";

            }
            else
            {
                if($jour>31 or $jour<1)
                {
                    $tab[$key]="Veuillez donner un nombre entre 1 et 31";
                }
            }      
        }

        else 
        {  
            $tab[$key]="Le champ jour doit être un nombre";
        }
    }
}


  // Fonction de validation MOIS
  function moisValide($mois, string $key,array &$tab):void
  {
      if(est_Vide($mois))
      {
          $tab[$key]="Veuillez remplir le champ mois"; 
          
      }
      else 
      { 
          if(est_nombre($mois))
          {  
              if (!est_positif($mois))
              {
                  $tab[$key]="Veuillez donner un nombre positif";
  
              }
              else
              {
                  if($mois>12 or $mois<1)
                  {
                      $tab[$key]="Veuillez donner un nombre entre 1 et 12";
                  }
              }      
          }
  
          else 
          {  
              $tab[$key]="Le champ mois doit être un nombre";
          }
      }
  }
  

    // Fonction de validation ANNEE
function anneeValide($annee, string $key,array &$tab):void
{
    if(est_Vide($annee))
    {
        $tab[$key]="Veuillez remplir le champ annnee"; 
        
    }
    else 
    { 
        if(!est_nombre($annee))
        {  
            $tab[$key]="Le champ jour doit être un nombre";          
               
        }
    }
}

  // Fonction Année Bisséxitile
    function bissextile($annee):bool {
        if((($annee%4==0) &&  ($annee%100<>0)) or ($annee%400==0)) 
        {
            // Année bissextile
            // vous remplacez le retour par ce que vou voulez
            return TRUE;
        } else 
        {
            // Année NON bissextile
            // vous remplacez le retour par ce que vou voulez
            return FALSE;
        }
    }



    // Fonction nombre de jour 
   function nbre_jour(int $mois, int $annee):bool{
    if($mois==2)
    {
        if(bissextile($annee))
        {
            $mois=29;
        }else
        {
            $mois=28;
        }
    }
    if(($mois==4 or $mois==6 or $mois=9 or $mois==11))
            {
                $jour=30;
        }
        else
        {
            $jour=31;
        }
            return $jour;
       }
   
    
  
    // Date Valide

    function date_valide(int $jour, int $mois, $annne){
        $jr=nbre_jour($annee,$mois);
        if($jour<=$jr and ($mois>=1 or $mois<=12) and $annne>0){
            return true;
        }else{
            return false;
        }

    }

   // Fonction date suivante 
   function date_suivante($jour, $mois, $annee):void{
       if($jour==nbre_jour($mois,$annee))
       {
           $jour++;
       }
       else
       {
          $jour=1;
        if($mois!=12){
            $mois++;
        }
        else
        {
            $mois=1;
            $annee++;
        }
       }
       echo "La date suivant: $jour/ $mois /$annee ";
      
    }
   
       
    // Fonct
  
    
?>