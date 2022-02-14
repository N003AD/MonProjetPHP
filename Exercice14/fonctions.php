
<?php
function isPrime($number) {
   
    for ($i = 2; $i < $number; $i++) {
        
        if ($number % $i == 0) {
            return FALSE;
        }
    }
 

    return TRUE;
}
 

echo '<br>Nombre premier de 0 Ã  100: ';
for ($i = 3; $i < 100; $i++) {
    if (isPrime($i)) {
        echo $i.' ';
    }
}
?>