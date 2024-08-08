<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo da Velha</title>
    <link rel="stylesheet" type="text/css" href="./index.css" />
    <link rel="icon" href="./assets/icon.png">
    <script src="./index.js"></script>
</head>


<body class="body">
<?php include("./server/ranking.php") ?>
    
    <div class="container-home">
        <div class="gradient-01"></div>
        <div class="gradient-02"></div>
        <h1 class="title">Tico vs Teco</h1>


        <div class="main">
            <div class="main-column">
                <input placeholder="Player 1 (X)" class="input" name="player1" type="text" id="player1" value="">
            </div>
            <div class="main-column">
                <input placeholder="Player 2 (O)" class="input" name="player2" type="text" id="player2" value="">
            </div>
        </div>

        <div class="container">
            <button onclick="saveToLocalStorage()">
                <span>
                    Play
                </span>
            </button>
        </div>

    </div>
</body>

</html>