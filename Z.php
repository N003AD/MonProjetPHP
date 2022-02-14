
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