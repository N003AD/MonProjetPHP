<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
     <form action="controllers.php" method="POST">
     <label for="mois">Choisir une langue puis affiche le mois</label><br><br>
      <select name="mois">
          <option value="Français">Français</option>
          <option value="Anglais">Anglais</option>
      </select><br><br>
      <input type="submit" name="valider" value="Envoyez">
     </form>
     
</body>
</html>

<?Php

  $moisFrancais = array('Janvier','Avril','Juillet','Octobre',
  'Février','Mai',
    'Août','Novembre','Mars',
      'Juin', 'Septembre', 'Décembre');

     
      echo "<table border=1 cellpadding=5 cellspacing =0>";

    

    echo "<tr>";

    for ($j=1;$j<10;$j++){

      echo "<td>".$i*$j."</td>";

    }

    echo "<tr>";

    }

    echo "</table>";
?>






 ////////////////////

 if(isset($color['corrige']))
