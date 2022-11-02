<?php

$heure = readline("Quelle heure est il? ");
$minute = readline("Quelle minute est il? ");
$minute = $minute + 1;

if ($heure >= 24) {
    $heure = $heure - 24;
}
if ($minute == 60) {
    $minute = 0;
    $heure = $heure + 1;
    } else if ($minute >= 61) {
        $minute = $minute - 60;
        $heure = $heure + 1;
    }

echo "dans une heure il sera " . $heure . "h" . $minute;

?>
