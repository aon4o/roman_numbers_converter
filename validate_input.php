<?php

/**
 * Function for input validation.
 * @param string $input
 * @return bool
 */
function validate_input(string $input): bool
{
    if (empty($input)) {
        return true;
    }

    if (!empty(trim($input, 'ivxlcdm'))) {
        return true;
    }

    for ($index = 0; $index < strlen($input) - 4; ++$index) {
        if ($input[$index] === $input[$index + 1] && $input[$index] === $input[$index + 2] && $input[$index] === $input[$index + 3]) {
            return true;
        }
    }

    return false;
}
