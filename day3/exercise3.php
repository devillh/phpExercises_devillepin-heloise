<?php
$start = 1;
$end = 10;
$count = 0;

for ($i = $start; $i <= $end; $i++) {
    $count += pow($i, 2);
}

echo "La somme des carrés des nombres entre 1 et 10 est : " . $count;
?>