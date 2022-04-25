<?php

$areaOfYard = readline();

$subtotal = $areaOfYard * 7.61;
$discount = 18 / 100 * $subtotal;
$total = $subtotal - $discount;

echo 'The final price is: ',
    number_format(round($total, 2), 2, '.', ''),
    ' lv.',
    PHP_EOL;
echo 'The discount is: ',
    number_format(round($discount, 2), 2, '.', ''),
    ' lv.';