<?php

require('functions/form/core.php');
require('functions/html/generators.php');
require('functions/file.php');

$form = [
    'attr' => [
        'action' => 'index.php',
        'method' => 'post',
        'class' => 'my-form',
        'id' => 'login-form',
    ],
    'fields' => [
        'nickname' => [
            'type' => 'text',
            'attr' => [
                'placeholder' => 'Team name',
            ],
            'validate' => [
                'validate_not_empty',
            ],
        ],
    ],
    'buttons' => [
        'button' => [
            'type' => 'submit',
            'value' => 'Create'
        ],
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail',
    ],
];

$teams = [
    'team_name' => 'lopai',
    'players' => [
        ['nickname' => 'lopas',
            'score' => '5',],
        ['nickname' => 'lopas',
            'score' => '5',],
        ['nickname' => 'lopas',
            'score' => '5',],
    ]
];

$filtered_input = get_filtered_input($form);
if (!empty($filtered_input)) {
    $success = validate_form($form, $filtered_input);
}

function update_file($filtered_input)
{
    $array = file_to_array('data/teams.txt');
    $array[] = $filtered_input;
    array_to_file('data/teams.txt', $array);
}

function form_success($filtered_input)
{
    update_file($filtered_input);
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PZ2ABALLAS</title>
    <link rel="stylesheet" href="CSS/main.css">
</head>
<body>
<div class="container">
    <h2 class="title">Register</h2>
    <?php require('templates/form.tpl.php'); ?>
</div>
</body>
</html>