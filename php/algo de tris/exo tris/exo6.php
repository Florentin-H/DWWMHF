<?php
$stock=0;
$estVrai = true;
$tab1 = [1,5,8,76,50,40];
$tab2 = [70,80,90,1,1,1];
$tab3 = [];
for ($i=0; $i<count($tab1);$i++){
    $tab3[$i]= $tab1[$i]+$tab2[$i];
    echo $tab3[$i] . "  ";
}

while ($estVrai){
    $estVrai = false;
    for ($i=0;$i<=count($tab3)-2;$i++){

        if ($tab3[$i] > $tab3[$i+1]){
            $stock = $tab3[$i];
            $tab3[$i] = $tab3[$i+1];
            $tab3[$i+1] = $stock;
            $estVrai = true;
        }
    }
}
echo "\nle tableau trillé est \n";
foreach ($tab3 as $value){
    echo $value . "\n";
}



?>