<?php

$x = readline();

if ($x < 10) {
    $numberFormatter = new NumberFormatter('', NumberFormatter::SPELLOUT);
    echo $numberFormatter->format($x);
} else {
    echo 'number too big';
}