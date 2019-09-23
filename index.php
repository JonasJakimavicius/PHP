<?php

$strings = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];

$count_strings_array = count($strings) - 1;
$random_string = $strings[rand(0, $count_strings_array)];
$root = array_rand($strings);

$song = [];

for ($i = 1; $i < 4; $i++) {
    $every_th_numb=2;
    $song[] = $strings[$root];
    $root = $root + $every_th_numb;

    if ($root > $count_strings_array ) {
        $root=$root-$count_strings_array-1;
    }
}

var_dump($song);
print $count_strings_array;
