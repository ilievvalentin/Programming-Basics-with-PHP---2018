<?php

$durationOfStay = readline();
$typeOfRoom = readline();
$feedback = readline();

$pricePerNight = 0;
$discountPercentage = 0;

switch ($typeOfRoom) {
    case 'room for one person':
        $pricePerNight = 18;
        break;
    case 'apartment':
        $pricePerNight = 25;
        if ($durationOfStay < 10) {
            $discountPercentage = 30;
        } elseif ($durationOfStay >= 10 and $durationOfStay <= 15) {
            $discountPercentage = 35;
        } elseif ($durationOfStay > 15) {
            $discountPercentage = 50;
        }
        break;
    case 'president apartment':
        $pricePerNight = 35;
        if ($durationOfStay < 10) {
            $discountPercentage = 10;
        } elseif ($durationOfStay >= 10 and $durationOfStay <= 15) {
            $discountPercentage = 15;
        } elseif ($durationOfStay > 15) {
            $discountPercentage = 20;
        }
        break;
}

$subtotalWithoutDiscount = ($durationOfStay - 1) * $pricePerNight;
$subtotalWithDiscount =
    $subtotalWithoutDiscount
    - $subtotalWithoutDiscount * $discountPercentage / 100;

$total = 0;

if ($feedback == 'positive') {
    $total = $subtotalWithDiscount + $subtotalWithDiscount * 25 / 100;
} else {
    $total = $subtotalWithDiscount - $subtotalWithDiscount * 10 / 100;
}

echo number_format(round($total, 2), 2, '.', '');