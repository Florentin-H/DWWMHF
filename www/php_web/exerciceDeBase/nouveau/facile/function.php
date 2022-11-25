<?php
function pair($numbre)
{
    if ($numbre % 2 === 0) {
        $numbre = true;
    } else {
        $numbre = false;
    }
    return $numbre;
}
