<?php
    class Movie {
        public $nome;
        public $genere;

        function __construct($nome, $genere){
            $this-> nome = $nome;
            $this-> genere = $genere;
        }

        public function stampaFilm(){
            echo "Nome:" . $this->nome . ",Genere: " . $this->genere;
        }
    }

    $film1 = new Movie("Fast and Furious 1", "Azione");
    $film2 = new Movie("Interstellar", "Fantascienza");


    var_dump($film1, $film2);
    $film1 -> stampaFilm();
    echo "<br>";
    $film2 -> stampaFilm();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // echo $film -> stampaFilm();
    ?>
</body>
</html>