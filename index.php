<?php

$letters_array = ['a', 'b', 's', 'x', 'x', 'b', 's', 'a', 's', 'e'];

$val_from = 'a';
$val_to = 'x';

function change_values(&$array, &$val_from, &$val_to)
{
    foreach ($array as &$value) {
        if ($value == $val_from) {
            $value = $val_to;
        }
    }
}


print change_values($letters_array, $val_from, $val_to);

var_dump($letters_array);