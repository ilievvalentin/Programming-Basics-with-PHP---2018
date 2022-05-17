<?php

$balance = 0;
$numberOfOperations = readline();

while ($numberOfOperations > 0) {
    $input = readline();
    $numberOfOperations--;
    if ($input > 0) {
        $balance += $input;
        echo 'Increase: ',
        number_format(round($input, 2), 2, '.', ''),
        PHP_EOL;
    } else {
        echo 'Invalid operation!', PHP_EOL;
        break;
    }
}

echo 'Total: ', number_format(round($balance, 2), 2, '.', ''), PHP_EOL;