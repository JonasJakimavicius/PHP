<?php

$array = [];
$work_start = 9;
$work_end = 17;

for ($i = 0; $i < 7; $i++) {
    $date = date('l', strtotime("+ $i days"));

    if ($date == 'Saturday') {
        $array[$date] = 'Sleep day';
    } elseif ($date == 'Sunday') {
        $array[$date] = 'Church day';
    } else {

        for ($hour = 0; $hour < 24; $hour++) {
            if ($hour >= $work_start && $hour < $work_end) {
                $array[$date][$hour] = 'Work hour';
            } else {
                $array[$date][$hour] = 'Free time';
            }
        }
    }
}

var_dump($array);
