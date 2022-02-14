





<?php
  session_start();
?>


<?php
 
    if(isset($_POST["valider"])){
        $_SESSION['nbr'] = $_POST['nbr'];
        header('location:index.php?'); 
    }


?>


       