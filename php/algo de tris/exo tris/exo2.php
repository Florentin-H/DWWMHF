<?php 
$tab = [10,22,9,11,12,21,20,19,18,17,14,15,16,8,1,7,2,6,3,5,4,13];
//tri à bulle
$estVrai =true;
while($estVrai){
    $estVrai =false;
    for ($i=0 ; $i< count ($tab)-1; $i++){
        if($tab[$i]<$tab[$i+1]){
            $temp = $tab[$i];
            $tab[$i] = $tab[$i+1];
            $tab[$i+1] = $temp;
            $estVrai =true;
        }
    }
}

foreach($tab as $value){
    echo $value . "\n";
}




?>