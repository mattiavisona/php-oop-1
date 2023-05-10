<?php
require_once './Models/Movie.php';
require_once './Models/Type.php';

$babylon = new Movie("Babylon", "Paramount Pictures", 2022, new Type("Comedy", "storic", "dramatic"));
$missionImpossible = new Movie("Mission Impossible", "Paramount Pictures", 1996, new Type("Action", "espionage", "thriller"));
$titanic = new Movie("Bad Boys", "Columbia Pictures", 1995, new Type("Action", "comedy", "thriller"));

$movies = [
    $babylon, $missionImpossible, $titanic
];

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<style>
    body {
        background-color: beige;
    }
</style>

<body>
    <?php
    include './Views/Partials/header.php';
    ?>
    <div class="main-container p-3 text-center">
        <h2 class="pb-4">Movies List</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Casa di produzione</th>
                    <th>Anno</th>
                    <th>Genere</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($movies as $movie) {
                ?>
                    <tr>
                        <td><?php echo $movie->title ?></td>
                        <td><?php echo $movie->houseProduction ?></td>
                        <td><?php echo $movie->year ?></td>
                        <td><?php echo $movie->type->getCinema() ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>