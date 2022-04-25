<?php

$typeOfFigure = readline();

$area = 0;

if ($typeOfFigure == 'square') {
    $side = readline();
    $area = pow($side, 2);
} elseif ($typeOfFigure == 'rectangle') {
    $length = readline();
    $width = readline();
    $area = $width * $length;
} elseif ($typeOfFigure == 'circle') {
    $radius = readline();
    $area = pi() * pow($radius, 2);
} elseif ($typeOfFigure == 'triangle') {
    $base = readline();
    $height = readline();
    $area = ($height * $base) / 2;
}

echo $area;