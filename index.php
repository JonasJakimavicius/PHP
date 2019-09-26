<?php

$zodynas =
    [
        'bala',
        'traalal',
        'mano' =>
            [
                'balalaika',
                'tralialia',
                'bama' =>
                    [
                        'dama',
                        'rama',
                        'ruta',

                    ]

            ],

    ];



function array_flatten($array)
{
    if (!is_array($array)) {
        return FALSE;
    }
    $result = [];
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, array_flatten($value));
        } else {
            $result[$key] = $value;
        }
    }

    return $result;

}

$array_flatten = array_flatten($zodynas);
var_dump($array_flatten);

function print_all($array)
{
    $count = count($array) - 1;
    for ($i = 0; $i <= $count; $i++) {
        if ($i != $count) {
            print $array[$i] . ',';
        } else {
            print $array[$i] . '.';
        }
    }
}

$print_all = print_all($array_flatten);



/*
 * Funkcija, kuri isspausdina visus masyvo elementus nepriklausomai nuo masyvo gylio
 * */


//function printAll($array)
//{
//    if (!is_array($array)) {
//        print $array . ', ';
//        return;
//    }
//
//    foreach ($array as $v_id => $v) {
//        printAll($v);
//
//    }
//}

//
//var_dump( $array);


//$print_all = printAll($zodynas);




