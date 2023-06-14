<?php
$str = "abcdefghijklmnopqrstuvwxyz";
$i = 0;

while ($i < strlen($str)) {
    if ($i % 2) {
        echo $str[$i];
    }
    $i = $i + 1;
}
?>