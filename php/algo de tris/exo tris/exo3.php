<?php
$temp = 0;
$x=1;
$tab = [1,2,3,4,6,5];
$stock = 0;
for($i =0;$i< count($tab)/2;$i++){
   
    $temp = $tab [$i];
    $tab[$i] = $tab[count($tab)-$x];
    $tab[count($tab)-$x] = $temp;
    $x++;


}
foreach ($tab as $value){
    echo $value . " ";
}


?>