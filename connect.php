<?php
// filepath: c:\Users\Admin\Desktop\Programação\Projetos Pessoais\Site Missas\db.php
$host = 'localhost'; // Servidor do banco de dados
$user = 'root'; // Usuário do MySQL
$password = ''; // Senha do MySQL (deixe vazio no XAMPP)
$dbname = 'oracoes'; // Nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($host, $user, $password, $dbname);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>