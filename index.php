<?php 
require_once __DIR__ . "/classes/Movie.php";

$cast1 = ["I Soliti Ignoti", "Pina"];
$cast2 = ["Gianfranco", "Tony", "Caio"];

$padrino = new Movie('Il Padrino', 1972, 'Francis Ford Coppola', ['Mafia', 'Azione', 'Giallo'], new Cast($cast1));
$bladeRunner = new Movie('Blade Runner', 1982, 'Ridley Scott', ["Fantascienza", "Noir","Thriller"], new Cast($cast2));
$sevenSeal = new Movie('Il Settimo Sigillo', 1957, 'Ingmar Bergman', ["Classico", "Psicologico", "Thriller"], new Cast($cast1));
$spaceOdyssey = new Movie('2001: A Space Odyssey', 1968, 'Stanley Kubrick', ["Fantascienza", "Thriller", "Psicologico"], new Cast($cast2));

$movieList = [
    $padrino,
    $bladeRunner,
    $sevenSeal,
    $spaceOdyssey
];

var_dump($padrino-> describeSelf());
var_dump($bladeRunner-> describeSelf());
var_dump($sevenSeal-> describeSelf());
var_dump($spaceOdyssey-> describeSelf());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php !OOP!</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>

    <div class="container d-flex flex-wrap row-cols-2">

        <?php foreach($movieList as $movie) { ?>

            <div class="card">
                <div class="card-body">

                    <h5 class="card-title"><?= $movie->name ?></h5>

                    <span>Generi: </span>
                    <?php foreach($movie->genres as $singleGenre) { ?>
                        <span class="card-subtitle mb-2 text-muted"><?= $singleGenre ?></span>
                    <?php } ?>

                    <p class="card-text">
                       Regista: <?= $movie->director?> <br> Anno di uscita: <?= $movie->year ?>
                    </p>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="exampleModal">
                    View Cast
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>

        <?php } ?>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>