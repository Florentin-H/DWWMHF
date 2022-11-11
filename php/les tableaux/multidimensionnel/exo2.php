<?php

$i = 1;
$reverse = false;
while($i > 0) {
    for ($j= 0; $j < $i; $j++) {
        echo "*";
    }
    echo "\n";

    if ($i == 8) {
        $reverse = true;
    }

    if ($reverse) {
        $i--;
    } else {
        $i++;
    }
}

?>