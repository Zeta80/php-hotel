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
    <title>Document</title>
    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>
    <?php for ($i = 0; $i < count($hotels); $i++) {
        $hotel = $hotels[$i];
    ?>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">HOTEL</th>
                    <th><?php echo $hotel["name"]; ?></th>

                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">DESCRIZIONE</th>
                    <td> <?php echo  $hotel["description"]; ?> </td>

                </tr>
                <tr>
                    <th scope="row">DISTANZA DAL CENTRO</th>
                    <td> <?php echo $hotel["distance_to_center"]  ?> </td>

                </tr>
                <tr>
                    <th scope="row">VOTO</th>

                    <td> <?php echo $hotel["vote"]  ?> </td>
                </tr>
                <tr>
                    <th scope="row">PARCHEGGIO</th>

                    <td> <?php
                            if ($hotel["parking"]) {
                                echo "si";
                            } else {
                                echo "no";
                            }
                            ?>
                    </td>
                </tr>
            </tbody>
        </table>




    <?php } ?>

</body>

</html>