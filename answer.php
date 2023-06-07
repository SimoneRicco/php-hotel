<?php

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
$secondIndex = -1;
$isParkingOff = isset($_GET['p-on']) ? true : false;
// $distance = $_GET['dis'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <table class="table table-striped">
        <tr>
            <?php
            foreach ($hotels[0] as $key => $value) {
            ?><th><?php
                    echo $key;
                    ?></th><?php
                        }
                            ?>
        </tr>



        <?php
        foreach ($hotels as $key => $value) {
            $secondIndex++;
            if ($isParkingOff) {
                if ($hotels[$secondIndex]['parking']) {
        ?><tr><?php
                    foreach ($value as $k => $v) {
                ?>
                            <td><?php
                                if ($k == 'parking') {
                                    echo $v == false ? 'no' : 'yes';
                                } else {
                                    echo $v;
                                }
                                ?></td>
                        <?php
                    }
                        ?>
                    </tr><?php
                        }
                    } else {
                            ?><tr><?php
                                    foreach ($value as $k => $v) {
                                    ?>
                        <td><?php
                                        if ($k == 'parking') {
                                            echo $v == false ? 'no' : 'yes';
                                        } else {
                                            echo $v;
                                        }
                            ?></td>
                    <?php
                                    }
                    ?>
                </tr><?php
                    }
                }
                        ?>
    </table>
</body>

</html>