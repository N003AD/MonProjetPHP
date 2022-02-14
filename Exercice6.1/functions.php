<?php


$A= isset($_POST["var1"])?htmlspecialchars($_POST["var1"]):0;
$B= isset($_POST["var2"])?htmlspecialchars($_POST["var2"]):0;
$C= isset($_POST["var3"])?htmlspecialchars($_POST["var3"]):0;

?>
<?php
   if ($A!=0) {
    $D=$B*$B-4*$A*$C;
 echo 'Le déterminant vaut '.$D.'.<br/>';

 if($D<0)
 {
 echo 'Aucune solution !';
 }
 elseif($D==0)
 {
 echo 'Solution unique :<br/>-> X = ';
    $X=-$B/(2*$A);
 echo $X;
 }
 elseif($D>=0)
 {
 echo 'Solution double :<br/>';
     $X1=(-$B-sqrt($D))/2*$A;
     $X2=(-$B+sqrt($D))/2*$A;
 echo '-> X1 = '.$X1;
 echo ('<br/>');
 echo '-> X2 = '.$X2;
 }
 }


?>