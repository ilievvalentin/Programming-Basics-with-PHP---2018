<?php

$count = readline();
$x = readline();
$min = PHP_INT_MAX;

while ($count > 0) {
    $count--;
    if ($x < $min) {
        $min = $x;
    }
    $x = readline();
}

echo $min;