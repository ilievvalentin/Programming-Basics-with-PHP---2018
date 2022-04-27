<?php

$numberOfPacketsOfFoodForDogs = readline();
$numberOfPacketsOfFoodForCats = readline();

$total =
    $numberOfPacketsOfFoodForDogs * 2.5
    + $numberOfPacketsOfFoodForCats * 4;

echo number_format($total, 2), ' lv.';