<?php


$A= isset($_POST["a"])?htmlspecialchars($_POST["a"]):0;
$B= isset($_POST["b"])?htmlspecialchars($_POST["b"]):0;
$C= isset($_POST["c"])?htmlspecialchars($_POST["c"]):0;

?>

<html>
    <body>
    <p>Indiquer les valeurs a b c correspondantes au polynôme de forme ax<sup>2</sup>+bx+c</p>
        <form action="" method="POST">
            <label for="">Entrez le nombre a</label>
            <input type="text" name="a" value="<?php echo $A; ?>"><br>
            <label for="">Entrez le nombre b</label>
            <input type="text" name="b" id="" value="<?php echo $B; ?>"><br>
            <label for="">Entrez le nombre c</label>
            <input type="text" name="c" value="<?php echo $C; ?>"><br>
            <input type=submit name="change_dep" value="Valider">
            &nbsp;&nbsp;&nbsp;
            <input type=reset value="Annuler">
        </form>
    </body>
</html>

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