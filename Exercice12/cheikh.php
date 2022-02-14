
$moisFrancais = array(1=>'Janvier','Avril','Juillet','Octobre',
                 'Février','Mai',
                      'Août','Novembre','Mars',
                      'Juin', 'Septembre', 'Décembre');

                      ////////////////////////




                      <?php
$moisFrancais = array(1=>'Janvier','Avril','Juillet','Octobre',
'Février','Mai',
     'Août','Novembre','Mars',
     'Juin', 'Septembre', 'Décembre');


$cellColor = array(1=>'lightgrey','lightgrey','lightgrey','lightgrey',
                    'lightgrey','lightgrey',
                      'grey','grey', 'grey',
                      'grey','grey','grey');
echo "<table border=1> ";
for($i=1;$i<=12;$i++)
{
    echo " ".$i."</td><td bgcolor=$cellColor[$i]>". $moisFrancais[$i]."</td>" ; 
    ($i%4==0) ? print ("</tr><tr>") : print (""); } echo "</table> "; 

?>

//////__________________________________________//

<?php
echo "<table border=1 cellpadding=5 cellspacing =0>";

for ($i=1;$i<10;$i++){

 echo "<tr>";

 for ($j=1;$j<10;$j++){

  echo "<td bgcolor=$color>".$i*$j."</td>";

 }

 echo "<tr>";

}

echo "</table>";
?>
https://www.cours-gratuit.com/cours-php/cours-de-php