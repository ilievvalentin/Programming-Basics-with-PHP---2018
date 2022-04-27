<?php

$length = readline();
$width = readline();
$height = readline();
$percentageNotTakenByWater = readline();

$volume = $width * $height * $length;
$waterCapacityInLiters = $volume / 1000;
$WaterNeededInLiters =
    $waterCapacityInLiters
    - $waterCapacityInLiters * $percentageNotTakenByWater / 100;

echo number_format(
    round($WaterNeededInLiters, 3),
    3,
    '.',
    ''
);