<?php

$costOfExcursion = readline();
$numberOfPuzzles = readline();
$numberOfTalkingDolls = readline();
$numberOfTeddyBears = readline();
$numberOfMinions = readline();
$numberOfTrucks = readline();

$subtotal =
    $numberOfPuzzles * 2.6
    + $numberOfTalkingDolls * 3
    + $numberOfTeddyBears * 4.1
    + $numberOfMinions * 8.2
    + $numberOfTrucks * 2;
$subtotalAfterDiscount = 0;

if (
    $numberOfPuzzles
    + $numberOfTalkingDolls
    + $numberOfTeddyBears
    + $numberOfMinions
    + $numberOfTrucks
    >= 50
) {
    $subtotalAfterDiscount = $subtotal - $subtotal * 25 / 100;
} else {
    $subtotalAfterDiscount = $subtotal;
}

$total = $subtotalAfterDiscount - $subtotalAfterDiscount * 10 / 100;

if ($total >= $costOfExcursion) {
    echo 'Yes! ',
    number_format(round($total - $costOfExcursion, 2), 2, '.', ''),
    ' lv left.';
} else {
    echo 'Not enough money! ',
    number_format(round($costOfExcursion - $total, 2), 2, '.', ''),
    ' lv needed.';
}