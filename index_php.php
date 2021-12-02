<?php
$dischi = [
    [
        "immagine" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",  
        "nomeDisco" => 'New Jersey', 
        "nomeArtista" => 'Bon Jovi',
        "annoDiPubblicazione" => "anno di pubblicazione",
    ],
    [
        "immagine" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
        "nomeDisco" => "Ten's Summoner's Tales",
        "nomeArtista" => 'Sting',
        "annoDiPubblicazione" => "anno di pubblicazione",
    ],
    [
        "immagine" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
        "nomeDisco" => 'Steve Gadd Band', 
        "nomeArtista" => 'Steve Gadd Band',
        "annoDiPubblicazione" => "anno di pubblicazione",
    ],
    [
        "immagine" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
        "nomeDisco" => 'Brave new World',
        "nomeArtista" => 'Iron Maiden',
        "annoDiPubblicazione" => "anno di pubblicazione",
    ],
    [
        "immagine" => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
        "nomeDisco" => 'One more car, one more raider', 
        "nomeArtista" => 'Eric Clapton',
        "annoDiPubblicazione" => "anno di pubblicazione",
    ],
    [
        "immagine" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",  
        "nomeDisco" => 'New Jersey', 
        "nomeArtista" => 'Bon Jovi',
        "annoDiPubblicazione" => "anno di pubblicazione",
    ],
    [
        "immagine" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
        "nomeDisco" => "Ten's Summoner's Tales",
        "nomeArtista" => 'Sting',
        "annoDiPubblicazione" => "anno di pubblicazione",
    ],
    [
        "immagine" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
        "nomeDisco" => 'Steve Gadd Band', 
        "nomeArtista" => 'Steve Gadd Band',
        "annoDiPubblicazione" => "anno di pubblicazione",
    ],
    [
        "immagine" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
        "nomeDisco" => 'Brave new World',
        "nomeArtista" => 'Iron Maiden',
        "annoDiPubblicazione" => "anno di pubblicazione",
    ],
    [
        "immagine" => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
        "nomeDisco" => 'One more car, one more raider', 
        "nomeArtista" => 'Eric Clapton',
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/php_style.css">
</head>
<body>
    <header>
        <div class="my_navbar"></div>
    </header>
    <main>
        <div class="container">
            <div class="row row-cols-5">
                <?php
                    foreach ($dischi as $disco) {
                        $nome = $disco["nomeDisco"];
                        $url = $disco["immagine"];
                        $artista = $disco["nomeArtista"];

                        echo "
                        <div class='col'>
                            <div class='card my_card'>
                                <img class='card-img-top p-4' src='$url'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$nome</h5>
                                    <p class='card-subtitle'>$artista</p>
                                </div>
                            </div>
                        </div>
                        ";
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>