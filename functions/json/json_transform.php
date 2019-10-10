<?php

function array_to_file($file_name, $array)
{
    if (!file_exists($file_name)) {
        $new_array[] = $array;
        $data = json_encode($new_array);
        $file = file_put_contents($file_name, $data);
        return $file;
    } else {
        $array_old = file_to_array($file_name);
        $array_old[] = $array;
        $data = json_encode($array_old);
        $file = file_put_contents($file_name, $data);
        return $file;
    }
}

function file_to_array($file_name)
{
    if (file_exists($file_name)) {
        $json_string = file_get_contents($file_name);
        if ($json_string !== false) {
            $array = json_decode($json_string, true);
            return $array;
        } else {
            false;
        }

    } else {
        var_dump('Klaida, nera failo');
        return false;
    }
}

