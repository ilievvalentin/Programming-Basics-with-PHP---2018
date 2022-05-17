<?php

$count = 0;
$input = readline();

while ($input != 'Stop') {
    $count++;
    $input = readline();
}

echo $count;