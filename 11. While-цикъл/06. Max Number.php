<?php

$count = readline();
$x = readline();
$max = PHP_INT_MIN;

while ($count > 0) {
    $count--;
    if ($x > $max) {
        $max = $x;
    }
    $x = readline();
}

echo $max;