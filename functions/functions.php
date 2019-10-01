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
    $string = implode(' ', $new_print_array);
    return $string;
}
