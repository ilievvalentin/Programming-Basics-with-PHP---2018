<?php

$name = readline();
$gradeNumber = 1;
$gradeSum  = 0;
$numberOfFailedGrades = 0;
$hasBeenSuspended = false;

while ($gradeNumber <= 12) {
    $grade = readline();
    if ($grade >= 4) {
        $gradeSum = $gradeSum + $grade;
        $gradeNumber++;
    } else {
        $numberOfFailedGrades++;
    }
    if ($numberOfFailedGrades >= 2) {
        $hasBeenSuspended = true;
        break;
    }
}

if ($hasBeenSuspended) {
    echo "Mimi has been excluded at $gradeNumber grade";
} else {
    echo "$name graduated. Average grade: ",
    number_format(round($gradeSum / --$gradeNumber, 2), 2, '.', '');
}