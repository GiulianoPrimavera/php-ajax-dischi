<?php 
$dischi = [
    [
        "nomeDisco" => "nome disco",
        "immagine" => "url immagine",
        "nomeArtista" => "nome artista",
        "annoDiPubblicazione" => "anno di pubblicazione",
    ],
    [
        "nomeDisco" => "nome disco",
        "immagine" => "url immagine",
        "nomeArtista" => "nome artista",
        "annoDiPubblicazione" => "anno di pubblicazione",
    ],
    [
        "nomeDisco" => "nome disco",
        "immagine" => "url immagine",
        "nomeArtista" => "nome artista",
        "annoDiPubblicazione" => "anno di pubblicazione",
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <header>
        <div class="my_navbar"></div>
    </header>
    <main>
        <div class="main_container">
            <?php
                foreach ($dischi as $disco) {
                    $nome =  $disco["nomeDisco"];
                    $url = $disco["immagine"];
                    $artista = $disco["nomeArtista"];
                    $anno = $disco["immagine"];

                    echo "<div class='card'>
                            <img class='card-img-top' src='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>Card title</h5>
                                <h6 class='card-subtitle'>Card subtitle</h6>
                            </div>
                        </div>";
                }
            ?>
        </div>
    </main>
    
</body>
</html>