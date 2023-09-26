<?php
function generatePassword($length) {
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $numbersChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $allChars = $uppercaseChars . $lowercaseChars . $numbersChars . $specialChars;

    //Including lowercase letters, uppercase letters, numbers, and special characters
    $password = $uppercaseChars[rand(0, strlen($uppercaseChars) - 1)] .
                $lowercaseChars[rand(0, strlen($lowercaseChars) - 1)] .
                $numbersChars[rand(0, strlen($numbersChars) - 1)] .
                $specialChars[rand(0, strlen($specialChars) - 1)];

    // Generating the remaining characters
    for ($i = 4; $i < $length; $i++) {
        $password .= $allChars[rand(0, strlen($allChars) - 1)];
    }

    // Shuffling the characters to make the password more random
    $password = str_shuffle($password);
    echo "Generated Password: " . $password;
    return $password;
}

generatePassword(12);


