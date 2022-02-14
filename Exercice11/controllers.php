

<?php  
    include_once "fonctions.php";

  if(session_status() != PHP_SESSION_ACTIVE ){
    session_start();
  }
  


    if(isset($_POST['valider'])){

        if(isset($_POST['saisi'])){

            $saisi=$_POST['saisi'];

            if(est_nombre($saisi)){

                $tab=array(1);
                $tabInf=array(1);
                $tabSup=array(1);
                $moy=0;
                premier($saisi ,$tab , $moy);
                inferieureSuperieur($tab, $moy, $tabInf, $tabSup);
                $_SESSION['tabSup'] = $tabSup;
                $_SESSION['tabInf'] = $tabInf;
     
            }     
            
        }
}

    header('Location: index.php'); 

   


?>