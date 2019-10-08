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
                'email' =>
                    [
                        'type' => 'email',
                        'label' => 'E-mail',
                        'attr' =>
                            [
                                'placeholder' => 'Email',
                            ],
                        'validate' =>
                            [
                                'validate_not_empty',

                            ],
                    ],
                'vardas' =>
                    [
                        'type' => 'text',
                        'label' => 'Vardas',
                        'attr' =>
                            [
                                'placeholder' => 'Name',
                            ],

                        'validate' =>
                            [
                                'validate_not_empty',

                            ],
                    ],
                'age' =>
                    [
                        'type' => 'number',
                        'label' => 'Age',
                        'attr' =>
                            [
                                'placeholder' => 'Age',
                            ],
                        'validate' =>
                            [
                                'validate_is_number',
                                'validate_not_empty',
                                'validate_is_positive',
                                'validate_max_100',

                            ],
                    ],
                'name' =>
                    [
                        'type' => 'select',
                        'label' => 'vardas',
                        'attr' =>
                            [
                                'placeholder' => 'Name',
                            ],

                        'options' =>
                            [
                                'tadas' => 'Tadas',
                                'aurimas' => 'Aurimas',
                                'dainius' => 'Dainius',
                            ],

                        'validate' =>
                            [
                                'validate_not_empty',
                            ],
                    ],
                'surname' =>
                    [
                        'type' => 'text',
                        'label' => 'Pavardė',
                        'attr' =>
                            [
                                'placeholder' => 'Surname',
                            ],
                        'validate' =>
                            [
                                'validate_not_empty',

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
        'message' => 'Message!',
        'callbacks' => [
            'success' => 'form_success',
            'fail' => 'form_fail',
        ],

    ];

require('functions/functions.php');

if (!empty($filtered_input)) {
    $success = validate_form($form,$filtered_input );
};

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formos generavimas</title>
</head>
<body>
<?php require('templates/form.tpl.php'); ?>
</body>
</html>
