<?php

session_start();

// Incluir o arquivo de conexão
include 'conexao.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter dados do formulário
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Consulta SQL para verificar as credenciais
    $sql = "SELECT email, user_type FROM users WHERE email = ? AND password = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $email, $password);  
    $stmt->execute();
    $stmt->store_result();

    // Se as credenciais estiverem corretas, redirecione para a página do usuário
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($email, $user_type);
        $stmt->fetch();

        // Armazena informações do usuário na sessão
        $_SESSION["email"] = $email;

        // Redireciona com base no tipo de usuário
        if ($user_type == 'aluno') {
            header("Location: ../pages/aluno/index.php");
        } elseif ($user_type == 'professor') {
            header("Location: ../pages/professor/index.php");
        } else {
            // Tipo de usuário desconhecido
            echo '<script type="text/javascript">
                alert("Erro ao fazer login. Tipo de usuário desconhecido.");
                window.location.href = "../pages/signin.php";
              </script>';
        }

        exit();
    } else {
        echo '<script type="text/javascript">
            alert("Erro ao fazer login. Credenciais incorretas.");
            window.location.href = "../pages/signin.php";
          </script>';
    }

    $stmt->close();
}
?>
