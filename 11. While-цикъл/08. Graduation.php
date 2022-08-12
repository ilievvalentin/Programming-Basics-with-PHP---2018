<?php

$name = readline();
$gradeNumber = 1;
$gradeSum  = 0;

while ($gradeNumber <= 12) {
    $grade = readline();
    if ($grade >= 4) {
        $gradeSum = $gradeSum + $grade;
        $gradeNumber++;
    }
}

echo "$name graduated. Average grade: ",
number_format(round($gradeSum / 12, 2), 2, '.', '');