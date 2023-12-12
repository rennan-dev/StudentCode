<?php 

$host = "localhost"; // Altere para o host do seu banco de dados
$username = "root"; // Altere para o nome de usuário do seu banco de dados
$password = ""; // Altere para a senha do seu banco de dados
$database = "student_code"; // Altere para o nome do seu banco de dados

// Conectar ao banco de dados
$mysqli = new mysqli($host, $username, $password, $database);

// Verificar a conexão
if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
} else {
    echo "Conectado com Sucesso";
}

?>