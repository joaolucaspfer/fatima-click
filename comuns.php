<?php
// filepath: c:\Users\Admin\Desktop\Programação\Projetos Pessoais\Site Missas\comuns.php
include 'db.php'; // Inclui a conexão com o banco de dados

// Consulta para buscar as orações da tabela oracoes_comuns
$sql = "SELECT * FROM oracoes_comuns";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orações Comuns</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .prayer-card {
            background: #ffffff;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .prayer-card h3 {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Orações Comuns</h1>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="prayer-card">';
            echo '<h3>' . $row['titulo'] . '</h3>';
            echo '<p>' . nl2br($row['conteudo']) . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>Nenhuma oração encontrada.</p>';
    }
    $conn->close();
    ?>
</body>
</html>