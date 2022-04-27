<?php

$fruit = readline();
$dayOfWeek = readline();
$quantity = readline();

$fruitPrice = 0;
if (
    $dayOfWeek == 'Monday'
    or $dayOfWeek == 'Tuesday'
    or $dayOfWeek == 'Wednesday'
    or $dayOfWeek == 'Thursday'
    or $dayOfWeek == 'Friday'
) {
    switch ($fruit) {
        case 'banana':
            $fruitPrice = 2.5;
            break;
        case 'apple':
            $fruitPrice = 1.2;
            break;
        case 'orange':
            $fruitPrice = 0.85;
            break;
        case 'grapefruit':
            $fruitPrice = 1.45;
            break;
        case 'kiwi':
            $fruitPrice = 2.7;
            break;
        case 'pineapple':
            $fruitPrice = 5.5;
            break;
        case 'grapes':
            $fruitPrice = 3.85;
            break;
        default:
            die('error');
    }
} elseif ($dayOfWeek == 'Saturday' or $dayOfWeek == 'Sunday') {
    switch ($fruit) {
        case 'banana':
            $fruitPrice = 2.7;
            break;
        case 'apple':
            $fruitPrice = 1.25;
            break;
        case 'orange':
            $fruitPrice = 0.9;
            break;
        case 'grapefruit':
            $fruitPrice = 1.6;
            break;
        case 'kiwi':
            $fruitPrice = 3;
            break;
        case 'pineapple':
            $fruitPrice = 5.6;
            break;
        case 'grapes':
            $fruitPrice = 4.2;
            break;
        default:
            exit('error');
    }
} else {
    die('error');
}
$total = $quantity * $fruitPrice;

echo number_format(round($total, 2), 2);