<?php
include 'conectaBanco.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Produtos - Loja de Tênis</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Produtos</h1>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="navega.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="produtos.php">Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="promocao.php">Adicionar Produto</a>
            </li>
        </ul>
        <div class="mt-4">
            <h2>Lista de Produtos</h2>
            <?php
            $sql = "SELECT * FROM produtos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table class="table">';
                echo '<thead><tr><th>ID</th><th>Nome</th><th>Descrição</th><th>Preço</th><th>Estoque</th></tr></thead>';
                echo '<tbody>';
                while($row = $result->fetch_assoc()) {
                    echo '<tr><td>' . $row["id"]. '</td><td>' . $row["nome"]. '</td><td>' . $row["descricao"]. '</td><td>' . $row["preco"]. '</td><td>' . $row["estoque"]. '</td></tr>';
                }
                echo '</tbody></table>';
            } else {
                echo "Nenhum produto encontrado.";
            }
            ?>
        </div>
    </div>
</body>
</html>
