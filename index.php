<?php 
require_once __DIR__ . "/classes/Movie.php";
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
<?php 

$padrino = new Movie('Il Padrino', 1972, 'Francis Ford Coppola', ['Mafia', 'Azione', 'Giallo']);
$bladeRunner = new Movie('Blade Runner', 1982, 'Ridley Scott', ["Fantascienza", "Noir","Thriller"]);
$sevenSeal = new Movie('Il Settimo Sigillo', 1957, 'Ingmar Bergman', ["Classico", "Psicologico", "Thriller"]);
$spaceOdyssey = new Movie('2001: A Space Odyssey', 1968, 'Stanley Kubrick', ["Fantascienza", "Thriller", "Psicologico"]);

var_dump($padrino-> describeSelf());
var_dump($bladeRunner-> describeSelf());
var_dump($sevenSeal-> describeSelf());
var_dump($spaceOdyssey-> describeSelf());

?>
    
</body>
</html>