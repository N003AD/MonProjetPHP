

<?php
  
  include_once "functions.php";

    session_start();
    if(isset($_POST["valider"])){

   
        $_SESSION['mois'] = $_POST['mois'];
        header('location:index.php?'); 
    }


 

?>
