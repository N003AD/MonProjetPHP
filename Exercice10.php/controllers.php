<?php
include_once("fonctions.php");

session_start();
if(isset($_POST['ok'])){
$n=$_POST['N'];
$_SESSION['post']=$_POST;
$arrError=[];
controle($n,'N',$arrError);
if(count($arrError)==0){
    champs($n);
}else{
    $_SESSION['error']=$arrError;
    header('location:index.php'); 
    exit();
}
}else{
header('location:index.php');
exit();
}