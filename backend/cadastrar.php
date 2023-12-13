<?php
// Iniciar a sessão
session_start();

// Incluir o arquivo de conexão
require_once 'conexao.php';

// Processar o formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userType = $_POST['tipo'];

    // Verificar se o tipo é um dos valores esperados
    if ($userType !== 'aluno' && $userType !== 'professor') {
        echo "Erro: Tipo de usuário inválido.";
        exit; // Encerrar o script, pois o tipo de usuário é inválido
    }

    // Inserir dados no banco de dados usando prepared statement
    $stmt = $mysqli->prepare("INSERT INTO users (email, password, user_type) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $password, $userType);

    if ($stmt->execute()) {
        echo '<script type="text/javascript">
            alert("Cadastro realizado com sucesso.");
            window.location.href = "../pages/signin.php";
          </script>';
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
}

// Fechar a conexão
$mysqli->close();
?>
