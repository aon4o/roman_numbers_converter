<?php

use PHPUnit\Framework\TestCase;

include('src/RomanNumbers.php');

class RomanNumbersTest extends TestCase
{
    /**
     * @test
     * @dataProvider data_provider
     */
    public function it_generates_roman_numbers_correctly($arabic, $roman)
    {
        $this->assertEquals($roman, RomanNumbers::generate($arabic));
    }

    public function data_provider(): array
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [11, 'XI'],
            [21, 'XXI'],
            [34, 'XXXIV'],
            [0, ''],
            [-123, ''],
            [43, 'XLIII'],
            [900, 'CM'],
            [1999, 'MCMXCIX'],
            [2024, 'MMXXIV']
        ];
    }
}
