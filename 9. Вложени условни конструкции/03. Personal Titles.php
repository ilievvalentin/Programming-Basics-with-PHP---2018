<?php

$age = readline();
$gender = readline();

if ($age < 16) {
    if ($gender == 'm') {
        echo 'Master';
    } else {
        echo 'Miss';
    }
} else {
    if ($gender == 'm') {
        echo 'Mr.';
    } else {
        echo 'Ms.';
    }
}