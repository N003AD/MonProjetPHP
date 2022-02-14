
 <?php
    include_once("fonctions.php");

  session_start();
if(isset($_POST['valider'])){
    $jour=$_POST['jour'];
    $mois=$_POST['mois'];
    $annee=$_POST['annee'];
    $_SESSION['post']=$_POST;
    $tab = [];  // $arrError=[];
    jourValide($jour,"jour",$tab);
    moisValide($mois,"mois",$tab);
    anneeValide($annee,"annee",$tab);
    if(count($tab)==0){
        echo "La date saisi: $jour/ $mois /$annee .<br>";
        date_suivante($jour,$mois,$annee);

    }else{
        $_SESSION['error']=$tab;
        //var_dump( $_SESSION);
        header('location:index.php'); 
        exit();
    }
}else{
    //Redirection
    header('location:index.php');
    exit();
}

?>
