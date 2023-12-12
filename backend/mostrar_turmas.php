<?php
include("conexao.php");

function exibirTurmas() {
    session_start();
    $emailProfessor = $_SESSION["email"];

    $sql = "SELECT * FROM turmas WHERE email_professor = ?";
    $stmt = $GLOBALS['mysqli']->prepare($sql);
    $stmt->bind_param("s", $emailProfessor);
    $stmt->execute();
    $result = $stmt->get_result();

    // Retorna o resultado para ser exibido
    return $result;
}
?>
