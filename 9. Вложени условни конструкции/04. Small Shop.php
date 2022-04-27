<?php

$productType = readline();
$town = readline();
$quantity = readline();

$total = 0;

if ($town == 'Sofia') {
    if ($productType == 'coffee') {
        $total = $quantity * 0.5;
    } elseif ($productType == 'water') {
        $total = $quantity * 0.8;
    } elseif ($productType == 'beer') {
        $total = $quantity * 1.2;
    } elseif ($productType == 'sweets') {
        $total = $quantity * 1.45;
    } else {
        $total = $quantity * 1.6;
    }
} elseif ($town == 'Plovdiv') {
    if ($productType == 'coffee') {
        $total = $quantity * 0.4;
    } elseif ($productType == 'water') {
        $total = $quantity * 0.7;
    } elseif ($productType == 'beer') {
        $total = $quantity * 1.15;
    } elseif ($productType == 'sweets') {
        $total = $quantity * 1.3;
    } else {
        $total = $quantity * 1.5;
    }
} else {
    if ($productType == 'coffee') {
        $total = $quantity * 0.45;
    } elseif ($productType == 'water') {
        $total = $quantity * 0.7;
    } elseif ($productType == 'beer') {
        $total = $quantity * 1.1;
    } elseif ($productType == 'sweets') {
        $total = $quantity * 1.35;
    } else {
        $total = $quantity * 1.55;
    }
}

echo $total;