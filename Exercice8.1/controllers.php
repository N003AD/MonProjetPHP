<?php 


  session_start();


if(isset($_POST["valider"])){
    $_SESSION['nbr'] = $_POST['nbr'];
    header('location:index.php?'); 
    exit();
}
?>








       