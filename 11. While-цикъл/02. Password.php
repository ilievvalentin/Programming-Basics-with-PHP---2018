<?php

$username = readline();
$password = readline();
$confirmPassword = readline();

while ($confirmPassword != $password) {
    $confirmPassword = readline();
}

echo "Welcome $username!";