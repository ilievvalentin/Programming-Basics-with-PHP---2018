<?php

$x = readline();

if ($x < 100) {
    echo 'Less than 100';
} elseif ($x >= 100 and $x <= 200) {
    echo 'Between 100 and 200';
} elseif ($x > 200) {
    echo 'Greater than 200';
}