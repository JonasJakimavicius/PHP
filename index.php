<?php

$letters_array = ['a', 'b', 's', 'x', 'x', 'b', 's', 'a', 's','e'];

function count_values($array, $letter)
{
    $result = 0;
    foreach ($array as $value) {
        if ($value === $letter) {
            $result++;
        }
    }
    return $result;
}

$letter='e';

print count_values($letters_array, $letter);