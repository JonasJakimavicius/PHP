<?php

/*
 * Funkcija, kuri isspausdina formos, input'u ir button atrributus
 * ji eina per masyva, jo  keys ir values, juos sujungia i html tinkama sintakse ir ideda i nauja masyva
 * tada visa masyva implodina ir pavercia stringu, kuri grazina i HTML
 * */
function html_attr($form_array)
{
    $new_print_array = [];
    foreach ($form_array as $key => $value) {
        $new_print_array[] = "$key = \"$value\"";

    }
    return $string = implode(' ', $new_print_array);

}

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

function get_filtered_input($array)
{
    $filter_parameters = [];

    foreach ($array['fields'] as $field_key => $field) { // jei true, su tuo masyvu, daryk tai:print $inner_array['filter'];
        $filter_parameters[$field_key] = $field['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS; // ideda filtra (konstantą) kokia nurodyta masyve.
    };

    return filter_input_array(INPUT_POST, $filter_parameters); // sitoj eilutej vyskta sanitation pagal default f-ja
}

$filtered_input = get_filtered_input($form);
function validate_form(&$form, $filtered_input)
{
    $success = true;

    foreach ($form['fields'] as $field_key => &$field_value) {
        $field_value['attr']['value'] = $filtered_input[$field_key];

        foreach ($field_value['validate'] ?? [] as $validate) {
            $is_valid = $validate($filtered_input[$field_key], $field_value);
            if (!$is_valid) {
                $success = false;
                break;
            }
        }
        unset($field);
    }
    if ($success) {
        if (isset($form['callbacks']['success'])) {
            $form['callbacks']['success']($filtered_input, $form);
        }
    } else {
        if (isset($form['callbacks']['fail'])) {
            $form['callbacks']['fail']($filtered_input, $form);
        }
    }
    return $success;
}


function form_success() {
    if (!empty($_POST)) {
        var_dump('win');
    }
}
function form_fail() {
    var_dump('fail');
}

