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
    // stampa dell'array
    // var_dump($hotels); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /boostrap -->

</head>
<body>
    <header>
        <div class="container py-3">
            <h1 class="text-center">Hotel Disponibili</h1>
        </div>  
    </header>
    <main>
        <div class="container-lg">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Parcheggio</th>
                            <th scope="col">Voto</th>
                            <th scope="col">Distanza dal centro</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php foreach($hotels as $hotel): ?> 
                            <tr>
                                <td scope="row">
                                    <div><?php echo $hotel['name']; ?></div>
                                </td>
                                <td>
                                    <div><?php echo $hotel['description']; ?></div>
                                </td>
                                <td>
                                    <div><?php echo $hotel['parking'] ? 'si' : 'no'; ?></div>
                                </td>
                                <td>
                                    <div><?php echo $hotel['vote']; ?>/5</div>
                                </td>
                                <td>
                                    <div><?php echo $hotel['distance_to_center']; ?>km</div>
                                </td>
                            </tr>
                        <!-- chiusura foreach (}) -->
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </main>
</body>
</html>