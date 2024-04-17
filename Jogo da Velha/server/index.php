<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = $_POST["nome"];

    if ($nome == "empate") {
        header("Location: ../index.php");
    } else {


        $servername = "sql213.byethost12.com";
        $username = "b12_36347631";
        $password = "JNTS2004#20j";
        $dbname = "b12_36347631_Jogo_da_Velha";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM ranking WHERE nome = '$nome'";
        $result = $conn->query($sql);


        if ($result->num_rows === 0) {
            $insertSql = "INSERT INTO ranking (nome, pontuacao) VALUES ('$nome', 1)";
            if ($conn->query($insertSql) === TRUE) {
                header("Location: ../index.php");
            } else {
                echo "Erro ao inserir o nome: " . $conn->error;
            }
        } else {

            $updateSql = "UPDATE ranking SET pontuacao = pontuacao + 1 WHERE nome = '$nome'";
            if ($conn->query($updateSql) === TRUE) {
                header("Location: ../index.php");
            } else {
                echo "Erro ao atualizar a pontuação: " . $conn->error;
            }
        }

        $conn->close();
    }
} else {

    echo "Requisição inválida.";
}