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
                'y' =>
                    [
                        'type' => 'number',
                        'label' => 'num-y',
                        'attr' =>
                            [
                                'placeholder' => 'Number',
                            ],
                        'validate' =>
                            [
                                'validate_not_empty',
                                'validate_is_number',
                            ],
                    ],
                'x' =>
                    [
                        'type' => 'number',
                        'label' => 'num-x',
                        'attr' =>
                            [
                                'placeholder' => 'Number',
                            ],

                        'validate' =>
                            [
                                'validate_not_empty',
                                'validate_is_number',
                            ],
                    ],


            ],
        'buttons' =>
            [
                'button' =>
                    [
                        'type' => 'submit',
                        'value' => 'register'
                    ],
            ],

        'callbacks' =>
            [
                'success' => 'form_success',
                'fail' => 'form_fail',
            ],

    ];

require('functions/functions.php');

if (!empty($filtered_input)) {
    $success = validate_form($form, $filtered_input);
};

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pirma uzduotis</title>
</head>
<body>
<?php require('templates/form.tpl.php'); ?>
</body>
</html>
