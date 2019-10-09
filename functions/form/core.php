<?php

require('validators.php');

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
        unset($field_value);
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


