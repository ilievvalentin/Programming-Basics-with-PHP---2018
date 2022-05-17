<?php

$sum = 0;
$input = readline();

while ($input != 'Stop') {
    $sum += $input;
    $input = readline();
}

echo $sum;