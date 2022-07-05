<?php

require('constants.php');

/**
 * Function for calculating Roman numbers.
 * @param string $input
 * @return string
 */
function calculate_roman_number(string $input): string
{
    $result = strtoupper($input).' -> ';
    $result_number = 0;

    $numbers = [];

    foreach (str_split($input) as $number) {
        $numbers[] = ROMAN_NUMBERS[$number];
    }

    $lastIndex = count($numbers) - 1;

    foreach ($numbers as $index => $value) {
        if ($lastIndex !== $index && $value < $numbers[$index + 1]) {
            $result_number -= $value;
            continue;
        }
        $result_number += $value;
    }

    $result .= $result_number;

    return $result;
}
