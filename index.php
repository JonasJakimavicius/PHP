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
    setcookie('kukis', json_encode($filtered_input), time() + 20, '/');
}

function form_fail($filtered_input, &$form)
{
    $fail = setcookie('kuksis', json_encode($filtered_input), time() + 40, '/');
    var_dump('Retard alert');
}

if (isset($_COOKIE['kuksis'])) {
    $array_from_cookie = json_decode($_COOKIE['kuksis'], true);
    $form['fields']['nickname']['attr']['value'] = $array_from_cookie['nickname'];
    $form['fields']['password']['attr']['value'] = $array_from_cookie['password'];
    $array_from_cookie = [];

}

$user_id = rand(1, 999999);


if (!isset($_COOKIE['kukutis'])) {
    $user_data = [
        'user_id' => $user_id,
        'time' => 1,
    ];
    $kukutis = setcookie('kukutis', json_encode($user_data), time() + 30, '/');
}

if (isset($_COOKIE['kukutis'])) {
    $array_from_cookie = json_decode($_COOKIE['kukutis'], true);
    $array_from_cookie['time'] += 1;
    setcookie('kukutis', json_encode($array_from_cookie), time() + 30, '/');
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
<?php if (isset($_COOKIE['kukutis'])): ?>
    <h1><?php print $array_from_cookie['user_id']; ?> </h1>
    <h2><?php print $array_from_cookie['time']; ?></h2>
<?php endif; ?>

</body>
</html>
