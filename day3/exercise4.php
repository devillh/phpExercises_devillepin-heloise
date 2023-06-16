<?php
function averageCalc($numbers)
{
    $sum = 0;
    $nbElement = count($numbers);

    foreach ($numbers as $value) {
        $sum += $value;
    }

    $avg = $sum / $nbElement;
    return $avg;
}

$nbArray = array(75, 80, 90, 95, 85);
$averageArray = averageCalc($nbArray);

echo "La moyenne du tableau est : ", $averageArray, ".";
?>