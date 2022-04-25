<?php

$ax = readline();
$ay = readline();
$cx = readline();
$cy = readline();

$length = abs($ax - $cx);
$width = abs($ay - $cy);
$area = $width * $length;
$perimeter = 2 * ($length + $width);

echo number_format($area, 2, '.', ''), PHP_EOL;
echo number_format($perimeter, 2, '.', '');