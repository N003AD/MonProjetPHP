    <?php
        include_once "functions.php";
        
        if(isset($_POST["valider"]))
        {

            $nb = $_POST['nbr'];
        
            $tab = [];

            valide($nb, "nbr",$tab);

            if(count($tab)==0)
            {
                multiplication($nb);

            }
            
           
            {
                var_dump($tab);

            } 

        }
        else
        {
            header("location:index.php");
        }



    ?>