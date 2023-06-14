<?php
$numbers = array(21565, 3412, 180, 1556, 182, 84, 15);
$nb = array();

foreach ($numbers as $value) {
    if ($value % 3) {
        array_push($nb, $value);
    }
}

for ($i = 0; $i < count($nb); $i++) {
    if ($i === 0) {
        echo $nb[$i];
    } else {
        echo ", ", $nb[$i];
    }
}
?>