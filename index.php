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

$select = $_GET['parking'];

var_dump($select)
// var_dump($valutation)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3a1d17ee5d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hotel</title>
</head>

<body>

    <form action="">
        <div class="d-flex p-2 gap-4">
            <div>parking</div>

            <select type="text" name="parking" id="parking">
                <option value="booth"></option>
                <option value="si">si</option>
                <option value="no">no</option>
            </select>



            <button>INVIA</button>

        </div>

    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">parking</th>
                <th scope="col">vote/5</th>
                <th scope="col">distance to center</th>
            </tr>
        </thead>
        <?php
        for ($i = 0; $i < count($hotels); $i++) {
            $hotel = $hotels[$i];
            $name = $hotel['name'];
            $description = $hotel['description'];
            $parking = $hotel['parking'];
            $vote = $hotel['vote'];
            $distance_to_center = $hotel['distance_to_center'];
        ?>
            <tbody>
                <tr class="<?php if ($select === 'si' && $parking === true) {
                                echo 'd-none';
                            } else {
                                echo '';
                            }

                            if ($select === 'no' && $parking === false) {
                                echo '';
                            } else {
                                echo 'd-none';
                            }

                            if($select === 'booth' ){
                                echo 'd-block';
                            }
                            ?>">
                    <th scope="row">
                        <?php echo $name ?>
                    </th>
                    <td>
                        <?php echo $description ?>
                    </td>
                    <td>
                        <?php if ($parking === true) {
                            echo '<i class="fa-solid fa-check text-success"></i>';
                        } else {
                            echo '<i class="fa-solid fa-xmark text-danger"></i>';
                        }
                        ?>
                    </td>
                    <td>
                        <?php echo $vote ?>
                    </td>
                    <td>
                        <?php echo $distance_to_center ?>
                    </td>
                </tr>

            </tbody>
        <?php
        }
        ?>
    </table>
</body>

</html>

<!-- $select === 'si' && $parking === true  || $select === 'no' && $parking === false ? '' : 'd-none' -->