<?php
$start = 1;
$end = 50;
$count = 0;

for ($i = $start; $i <= $end; $i++) {
    if ($i % 2 === 0) {
        $count = $count + $i;
    }
}

echo "La somme des nombres pairs entre 1 et 50 est : " . $count;
?>