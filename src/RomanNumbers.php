<?php

class RomanNumbers
{
    const ROMAN_NUMERALS = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];

    /**
     * Function generating a Roman number from an Arabic one.
     *
     * @param $number
     * @return string
     */
    public static function generate($number): string
    {
        $result = '';

        foreach (self::ROMAN_NUMERALS as $roman => $arabic) {
            while ($number >= $arabic) {
                $result .= $roman;
                $number -= $arabic;
            }
        }

        return $result;
    }
}