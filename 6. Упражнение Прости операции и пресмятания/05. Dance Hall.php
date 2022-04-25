<?php

$length = readline();
$width = readline();
$sideOfWardrobe = readline();

$areaOfHallInSquareCentimeters = $length * 100 * $width * 100;
$areaOfWardrobeInSquareCentimeters = pow($sideOfWardrobe * 100, 2);
$areaOfBenchInSquareCentimeters = $areaOfHallInSquareCentimeters / 10;
$freeAreaInSquareCentimeters =
    $areaOfHallInSquareCentimeters -
    $areaOfWardrobeInSquareCentimeters -
    $areaOfBenchInSquareCentimeters;
$numberOfDancers = $freeAreaInSquareCentimeters / (40 + 7000);

echo floor($numberOfDancers);