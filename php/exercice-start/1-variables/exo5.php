<?php 

$A = 1;
$B = 2;
$C = 3;
$D = 0;

$D = $A;
$A = $B;
$B = $C;
$C = $D;


echo "la variable A vaut :" . $A . "\n";
echo "la variable B vaut :" . $B . "\n";
echo "la variable C vaut :" . $C . "\n";

?>