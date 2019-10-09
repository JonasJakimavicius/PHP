<?php

function validate_not_empty($field_input, &$field)
{
    if ($field_input === '') {
        $field['error'] = 'Laukas negali būti tuščias';
        return false;
    } else {
        return true;
    }
}

function validate_is_number($field_input, &$field)
{
    if (!is_numeric($field_input)) {
        $field['error'] = 'Turite įrašyti skaičių';
        return false;
    } else {
        return true;
    }
}

function validate_is_positive($field_input, &$field)
{
    if (($field_input < 0)) {
        $field['error'] = 'Amžius negali būti neigiamas';
        return false;
    } else {
        return true;

    }
}

function validate_max_100($field_input, &$field)
{
    if (($field_input > 100)) {
        $field['error'] = 'Amžius negali būti didesnis uz 100';
        return false;
    } else {
        return true;
    }
}
