<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="styles/vue_style.css">
    <link rel="stylesheet" href="styles/php_style.css">
</head>
<body>
    <div id="root">

        <header>
            <div class="my_navbar"></div>
        </header>

        <main>
    
            <div class="container">
        
                <div class="row row-cols-5">
        
                    <div class="col" v-for="singleDisc, i in dataDisc" :key="i">
                        <div class='card my_card'>
                            <img class='card-img-top p-4' :src='singleDisc.immagine'>
                            <div class='card-body'>
                                <h5 class='card-title'>{{singleDisc.nomeDisco}}</h5>
                                <p class='card-subtitle'>{{singleDisc.nomeArtista }} <br>{{ singleDisc.annoDiPubblicazione}}</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </main>
    </div>

<script src="script.js"></script>
</body>
</html>
