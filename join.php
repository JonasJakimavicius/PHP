<?php

require('functions/form/core.php');
require('functions/html/generators.php');
require('functions/file.php');

$form = [
    'attr' => [],
    'fields' => [
        'team' => [
            'type' => 'select',
            'attr' => [

            ],
            'options' => [

            ],
            'validate' => [
                'validate_not_empty',
                'validate_team',
            ],
        ],
        'player' => [
            'type' => 'text',
            'attr' => [
                'placeholder' => 'Player name',
            ],
            'validate' => [
                'validate_not_empty',
                'validate_team',
            ],
        ],
    ],
    'buttons' => [
        'button' => [
            'type' => 'submit',
            'value' => 'Join'
        ],
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail',
    ],
];

$filtered_input = get_filtered_input($form);

if (!empty($filtered_input)) {
    validate_form($form, $filtered_input);
}

function form_success($filtered_input)
{
    add_player($filtered_input);
}

function form_fail($filtered_input, &$form)
{

}

$array = file_to_array('data/teams.txt');

foreach ($array as $teams_key => $team) {
    $form['fields']['team']['options'][] = $team['team'];
}


function add_player($filtered_input)
{
    $array = file_to_array('data/teams.txt');
//    $status = true;
//    foreach ($array[$filtered_input['team']]['players'] as $player) {
//        if ($player === $filtered_input['player']) {
//            $status = false;
//        } else {
//            $status = true;
//        }
//    }
//    if ($status) {
    if (!in_array($filtered_input['player'], $array[$filtered_input['team']]['players'])) {
        $array[$filtered_input['team']]['players'][] = $filtered_input['player'];
        array_to_file('data/teams.txt', $array);
    }
}

var_dump($array);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PZ2ABALLAS komandos nariai</title>
    <!--    <link rel="stylesheet" href="CSS/main.css">-->
</head>
<body>
    <nav>
        <a href="create.php">Create</a>
        <a href="join.php">Join</a>
    </nav>
    <div class="container">
        <?php require('templates/form.tpl.php'); ?>
    </div>
</body>
</html>
