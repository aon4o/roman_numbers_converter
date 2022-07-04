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

    for ($index = 0; $index < count($numbers); ++$index) {
        if (count($numbers) - 1 === $index) {
            $result_number += $numbers[$index];
            continue;
        }

        if ($numbers[$index] < $numbers[$index + 1]) {
            $result_number -= $numbers[$index];
        } else {
            $result_number += $numbers[$index];
        }
    }

    $result.=$result_number;

    return $result;
}
