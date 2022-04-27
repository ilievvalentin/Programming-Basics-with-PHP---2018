<?php

$animal = readline();

echo match ($animal) {
    'dog' => 'mammal',
    'crocodile' or 'tortoise' or 'snake' => 'reptile',
    default => 'unknown',
};