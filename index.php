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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP Hotels</title>
</head>

<body class="bg-secondary">
    <h1 class="text-danger text-center">PHP Hotels</h1>
    <div class="container">
        <div class="row d-flex">
            <div class="col text-center fs-4">
                <?php foreach ($hotels as $hotel) {
                    echo 'Nome: ' . $hotel['name'] . ' <br> ';
                    echo 'Descrizione: ' . $hotel['description'] . ' <br> ';
                    echo 'Voto: ' . $hotel['vote'] . ' <br> ';
                    echo $hotel['parking'] ? 'Il parcheggio è disponibile' . ' <br> ' : 'Il parcheggio non è disponibile' . ' <br> ';
                    echo 'Distanza dal centro: ' . $hotel['distance_to_center'] . ' km' . ' <br> ' . ' <hr> ';
                    }
                ?>
            </div>
        </div>
    </div>
</body>

</html>