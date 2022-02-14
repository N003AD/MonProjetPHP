<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
    
<div class="container">
    <?php

    include_once("fonctions.php"); 

        $cote=rand(1,50) ;
        echo "Le Cote est ".  $cote."<br>";
        calculCarre($cote);
        $peri=perimetre($cote);
        echo "Le Perimetre est ". $peri."<br>";
    ?>
</div>

</body>
</html>