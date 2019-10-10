<?php

require('functions/form/core.php');
require('functions/html/generators.php');
require('functions/file/json_transform.php');

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
            'label' => 'nickname',
            'attr' => [
                'placeholder' => 'Nickname',
            ],
            'validate' => [
                'validate_not_empty',
            ],
        ],
        'password' => [
            'type' => 'password',
            'label' => 'password',
            'attr' => [
                'placeholder' => 'Password',
            ],
            'validate' => [
                'validate_not_empty',
                'validate_password',
            ],
        ],
    ],
    'buttons' => [
        'button' => [
            'type' => 'submit',
            'value' => 'register'
        ],
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail',
    ],
];

$filtered_input = get_filtered_input($form);

if (!empty($filtered_input)) {
    $success = validate_form($form, $filtered_input);
};

function update_file($filtered_input)
{
    $array = file_to_array('data/masyvas.txt');
    $array[] = $filtered_input;
    array_to_file('data/masyvas.txt', $array);
}

function form_success($filtered_input)
{
    update_file($filtered_input);
    setcookie('kukis', 'pilde', time() + 5, '/');
}

function form_fail()
{
    var_dump('Retard alert');
}

$users_info = is_array(file_to_array('data/masyvas.txt')) ? file_to_array('data/masyvas.txt') : [];


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Failu spausdinimas</title>
</head>
<body>
<?php if (!isset($_COOKIE['kukis'])): ?>
    <?php require('templates/form.tpl.php'); ?>
<?php else: ?>
    <table>
        <?php foreach ($users_info as $user): ?>
            <tr>
                <td><?php print "Nickname: {$user['nickname']} Password: {$user['password']}"; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

</body>
</html>
