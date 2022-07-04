<?php

require('validate_input.php');
require('calculate_roman_number.php');

echo "Здравей, тук съм за да конвертирам Римски цифри!\n";
echo "Ако искаш да прекратиш, можеш да напишеш 'quit'/'q'/'exit'.\n\n";

$input = '';

while (true)
{
    //    GETTING THE USER INPUT
    $input = str_replace(' ', '', strtolower(readline("Enter a Roman number -> ")));

    //    QUITTING THE PROGRAM
    if ($input === 'quit' or $input === 'q' or $input === 'exit') {
        break;
    }

    //    INPUT VALIDATION
    if (validate_input($input)) {
        echo "Невалидно число!\n";
        echo "Сигурен ли си, че въвеждаш Римско число изписано със символите I V X L C D M?\n\n";
        continue;
    }

    //    CALCULATING THE RESULT
    $result = calculate_roman_number($input);

    //    PRINTING THE RESULT TO THE CONSOLE
    echo $result."\n\n";
}

echo "Надявам се да съм бил от полза!\n";
echo "До скоро!\n";
