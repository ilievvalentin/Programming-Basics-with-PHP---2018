<?php

$town = readline();
$revenue = readline();

$commissionPercentage = readline();
if ($town == 'Sofia') {
    if (0 <= $revenue and $revenue <= 500) {
        $commissionPercentage = 5;
    } elseif (500 < $revenue and $revenue <= 1000) {
        $commissionPercentage = 7;
    } elseif (1000 < $revenue and $revenue <= 10000) {
        $commissionPercentage = 8;
    } elseif ($revenue > 10000) {
        $commissionPercentage = 12;
    } else {
        die('error');
    }
} elseif ($town == 'Varna') {
    if (0 <= $revenue and $revenue <= 500) {
        $commissionPercentage = 4.5;
    } elseif (500 < $revenue and $revenue <= 1000) {
        $commissionPercentage = 7.5;
    } elseif (1000 < $revenue and $revenue <= 10000) {
        $commissionPercentage = 10;
    } elseif ($revenue > 10000) {
        $commissionPercentage = 13;
    } else {
        die('error');
    }
} elseif ($town == 'Plovdiv') {
    if (0 <= $revenue and $revenue <= 500) {
        $commissionPercentage = 5.5;
    } elseif (500 < $revenue and $revenue <= 1000) {
        $commissionPercentage = 8;
    } elseif (1000 < $revenue and $revenue <= 10000) {
        $commissionPercentage = 12;
    } elseif ($revenue > 10000) {
        $commissionPercentage = 14.5;
    } else {
        die('error');
    }
} else {
    die('error');
}
$total = $revenue * $commissionPercentage / 100;

echo number_format(round($total, 2), 2, '.', '');