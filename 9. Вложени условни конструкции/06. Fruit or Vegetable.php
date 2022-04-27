<?php

$food = readline();

if (
    $food == 'banana' or
    $food == 'apple' or
    $food == 'kiwi' or
    $food == 'cherry' or
    $food == 'lemon' or
    $food == 'grapes'
) {
    echo 'fruit';
} elseif (
    $food == 'tomato' or
    $food == 'cucumber' or
    $food == 'pepper' or
    $food == 'carrot'
) {
    echo 'vegetable';
} else {
    echo 'unknown';
}