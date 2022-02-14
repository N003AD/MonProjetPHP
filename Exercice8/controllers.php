<?php
    include_once("fonctions.php");

    session_start();
    if(isset($_POST['valider'])){
    $saisi=$_POST['nbre'];
    $_SESSION['post']=$_POST;
    $arrError=[];
    valideNombre($saisi,'nbre',$arrError);
    if(count($arrError)==0){
        affichage($saisi);
    }else{
        $_SESSION['error']=$arrError;
        header('location:index.php'); 
        exit();     
    }

    }else{
        header('location:index.php');
        exit();
    }

?>