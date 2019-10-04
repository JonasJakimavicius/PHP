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
                        'attr' =>
                            [
                                'type' => 'email',
                                'placeholder' => 'Email',
                            ],
                        'extra' =>
                            [
                                'label' => 'E-mail',
                            ],
                        'error' => 'Klaida, nera pasto!',
                        'filter' => FILTER_SANITIZE_SPECIAL_CHARS,
                    ],
                'vardas' =>
                    [
                        'attr' =>
                            [
                                'type' => 'text',
                                'placeholder' => 'Name',
                            ],
                        'extra' =>
                            [
                                'label' => 'Vardas',

                            ],
                        'error' => 'Klaida, nera vardo!',
                        'filter' => FILTER_SANITIZE_SPECIAL_CHARS,
                    ],
                'name' =>
                    [
                        'attr' =>
                            [
                                'type' => 'select',
                                'placeholder' => 'Name',

                            ],
                        'extra' =>
                            [
                                'options' =>
                                    [
                                        'tadas' => 'Tadas',
                                        'aurimas' => 'Aurimas',
                                        'dainius' => 'Dainius',

                                    ],
                                'label' => 'vardas',
                                'error' => 'Klaida, nera name!',
                                'filter' => FILTER_SANITIZE_SPECIAL_CHARS,
                            ],
                    ],
                'surname' =>
                    [
                        'attr' =>
                            [
                                'type' => 'text',
                                'placeholder' => 'Surname',

                            ],
                        'extra' =>
                            [
                                'label' => 'Pavardė',
                            ],
                        'error' => 'Klaida, nera pavardes!',
                        'filter' => FILTER_SANITIZE_SPECIAL_CHARS,
                    ],
            ],
        'buttons' =>
            [
                'button' =>
                    [

                        'type' => 'submit',


                    ],
            ],
        'message' => 'Message!',

    ];

require('functions/functions.php');
// sigito kodas

function get_filtered_input($array)
{
    $filter_parameters = [];

    foreach ($array['fields'] as $idx => $inner_array) { // jei true, su tuo masyvu, daryk tai:
        $filter_parameters[$idx] = $inner_array['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS; // ideda filtra (konstantą) kokia nurodyta masyve.
    };
    return filter_input_array(INPUT_POST, $filter_parameters); // sitoj silutej vyskta sanitation pagal default f-ja
}

$filtered_input = get_filtered_input($form);
var_dump($filtered_input);

foreach ($form['fields'] as $inner_array_idx => &$inner_array) { // cia padaro, jog po submit paspaudimo, i inputa grazina isvalyta rezultata, aks buvo ivesta.
    $inner_array['attr']['value'] = $filtered_input[$inner_array_idx];

    if ($inner_array['attr']['value'] === '') { //jeigu $form'oje nera 'error', tai iraso toki elementa su nurodyta value.
        $inner_array['error'] = 'klaida';
    }
};

// sigito kodo pabaiga

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
