<?php

$library =
    [
        [
            'title' => 'Stepiu vilkas',
            'Author' => 'Hesse',
            'year' => 1968,
            'genre' => 'romance',
        ],
        [
            'title' => 'Buratinas',
            'Author' => 'lasasdojaod',
            'year' => 1855,
            'genre' => 'Fairy tale',
        ],
        [
            'title' => 'Pinokis',
            'Author' => 'Arlekinas',
            'year' => 1935,
            'genre' => 'fairy tale',
        ],
        [
            'title' => 'Vakaru fronte nieko naujo',
            'Author' => 'Remarkas',
            'year' => 1944,
            'genre' => 'romance',
        ],
        [
            'title' => 'Kelyje',
            'Author' => 'Keruakas',
            'year' => 1975,
            'genre' => 'romance',
        ],
    ];

$count_library = count($library);
$total_books_years = 0;


for ($i = 0; $i < $count_library; $i++) {
    $total_books_years += $library[$i]['year'];
}

$average_book_year = $total_books_years / $count_library;
//Sortas pagal pavadinima

function method1($a, $b)
{
    return ($a['title'] <= $b['title']) ? -1 : 1;
}
usort($library, "method1");
print_r($library);

//sortas pagal metus
function method1($a, $b)
{
    return ($a['year'] <= $b['year']) ? -1 : 1;
}
usort($library, "method1");
print_r($library);

?>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        table {
            background-color: black;
        }

        thead {
            display: inline-block;
            width: 100vw;
        }

        tr {
            display: block;

        }

        th {
            width: 25vw;
            height: 20px;

            background-color: white;
        }

        td {
            width: 25vw;
            height: 20px;

            background-color: white;
        }
    </style>
</head>
<body>
    <table>
        <thead>
        <tr>

            <?php foreach ($library as $book): ?>
                <?php foreach ($book as $list_id => $list): ?>
                    <th><?php print $list_id; ?></th>
                <?php endforeach; ?>
                <?php break; ?>
            <?php endforeach; ?>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($library as $book): ?>
            <tr>
                <?php foreach ($book as $list_id => $list): ?>

                    <td><?php print $list; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
