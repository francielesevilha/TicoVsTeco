<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo da Velha</title>
    <link rel="stylesheet" type="text/css" href="./index.css" />
    <link rel="icon" href="../assets/icon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Sora:wght@300&display=swap" rel="stylesheet">
    <script src="./index.js"></script>
</head>

<body class="body">
    <div class="container-home">
        <h1 class="title">Partida em progresso</h1>

        <table id="game-board" class="table">
            <tr>
                <td onclick="makeMove(this)" class="td"></td>
                <td onclick="makeMove(this)" class="td"></td>
                <td onclick="makeMove(this)" class="td"></td>
            </tr>
            <tr>
                <td onclick="makeMove(this)" class="td"></td>
                <td onclick="makeMove(this)" class="td"></td>
                <td onclick="makeMove(this)" class="td"></td>
            </tr>
            <tr>
                <td onclick="makeMove(this)" class="td"></td>
                <td onclick="makeMove(this)" class="td"></td>
                <td onclick="makeMove(this)" class="td"></td>
            </tr>
        </table>

     
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <p id="result"></p>

            <button id="vitoria" onclick="Proxima()">
                <span>
                   Salvar Resultado
                </span>
            </button>
        </div>
    </div>


</body>

</html>