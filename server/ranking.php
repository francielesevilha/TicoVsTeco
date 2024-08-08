
    <style>
        
        table {
            width: 150px;
            height: 100px;
            position: absolute;
            top: 0;
            left: 0;
            margin: 20px;
        }

        
        th, td {
            border: 1px solid black; 
            padding: 5px;
            text-align: center; 
            width: 100px;
            margin: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

       
        tr:first-child {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Pontuação</th>
        </tr>
        <?php
        $servername = "sql213.byethost12.com";
        $username = "b12_36347631";
        $password = "JNTS2004#20j";
        $dbname = "b12_36347631_Jogo_da_Velha";


        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Consulta SQL para selecionar os 10 primeiros resultados da tabela "ranking"
        $sql = "SELECT * FROM ranking ORDER BY pontuacao DESC LIMIT 10";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["pontuacao"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Nenhum resultado encontrado</td></tr>";
        }

        $conn->close();
        ?>
    </table>

