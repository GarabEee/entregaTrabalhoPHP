<?php
include 'conectaBanco.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Promoções - Loja de Tênis</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Promoções</h1>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="navega.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="produtos.php">Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="promocao.php">Promoções</a>
            </li>
        </ul>
        <div class="mt-4">
            <h2>Lista de Promoções</h2>
            <img src="imagens/promocao.jpg" class="img-fluid mb-4" alt="Imagem Promoções">
            <?php
            $sql = "SELECT promocoes.id, produtos.nome, promocoes.desconto, promocoes.data_inicio, promocoes.data_fim FROM promocoes JOIN produtos ON promocoes.produto_id = produtos.id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table class="table">';
                echo '<thead><tr><th>ID</th><th>Produto</th><th>Desconto</th><th>Data Início</th><th>Data Fim</th></tr></thead>';
                echo '<tbody>';
                while($row = $result->fetch_assoc()) {
                    echo '<tr><td>' . $row["id"]. '</td><td>' . $row["nome"]. '</td><td>' . $row["desconto"]. '%</td><td>' . $row["data_inicio"]. '</td><td>' . $row["data_fim"]. '</td></tr>';
                }
                echo '</tbody></table>';
            } else {
                echo "Nenhuma promoção encontrada.";
            }
            ?>
        </div>
    </div>
</body>
</html>
