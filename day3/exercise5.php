<?php
include "exercise5.function.php";

$numbers = array(35, 37, 39, 41, 43, 77, 79, 81);
$averageNb = averageCalc($numbers);

echo "La moyenne du tableau est : ", $averageNb, ".";
?>