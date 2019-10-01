<?php

$form =
    [
        'attr' =>
            [
                'action' => 'index.php',
                'method' => 'post',
                'class' => 'my-form',
                'id' => 'login-form',
            ],
        'fields' =>
            [
                'email' => [
                    'type' => 'email',
                    'placeholder' => 'Email',
                    'label' => 'E-mail',
                ],
                'name' => [
                    'type' => 'text',
                    'placeholder' => 'Name',
                    'label' => 'Vardas',
                    'error' => 'Klaida!',

                ],
                'surname' => [
                    'type' => 'text',
                    'placeholder' => 'Surname',
//                    'label' => 'Pavardė',

                ],
            ],
        'buttons' =>
            [
                [
                    'type' => 'submit',
                ],


            ],
    ];

require('functions/functions.php');

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php require('templates/form.tpl.php'); ?>
</body>
</html>
