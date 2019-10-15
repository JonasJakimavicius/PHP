<?phpfunction validate_not_empty($field_input, &$field){    if ($field_input === '') {        $field['error'] = 'Laukas negali būti tuščias';        return false;    } else {        return true;    }}function validate_is_number($field_input, &$field){    if (!is_numeric($field_input)) {        $field['error'] = 'Turite įrašyti skaičių';        return false;    } else {        return true;    }}function validate_is_positive($field_input, &$field){    if (($field_input < 0)) {        $field['error'] = 'Amžius negali būti neigiamas';        return false;    } else {        return true;    }}function validate_max_100($field_input, &$field){    if (($field_input > 100)) {        $field['error'] = 'Amžius negali būti didesnis uz 100';        return false;    } else {        return true;    }}function validate_password($field_input, &$field){    $length = strlen($field_input);    if ($length < 8) {        $field['error'] = 'Slaptažodis turi būti iš daugiau nei 8';        return false;    } else {        return true;    }}function validate_team($filtered_input){    $file_array = file_to_array('data/teams.txt');    var_dump($file_array);    !is_array($file_array) ? $file_array = [] : $file_array;    foreach ($file_array as $team_key => $team) {        if ($team['team'] === $filtered_input) {            return false;        }    }    return true;}