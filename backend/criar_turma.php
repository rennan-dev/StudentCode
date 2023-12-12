<?php
include("conexao.php");

// Função para gerar a chave única
function gerarChaveUnica() {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $chave = '';
    for ($i = 0; $i < 8; $i++) {
        $chave .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $chave;
}

// Obter dados do formulário
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$turma = $_POST['turma'];
$inicio = $_POST['inicio'];
$fim = $_POST['fim'];

// Gerar chave única
$chaveUnica = gerarChaveUnica();

// Inserir dados no banco de dados
$sql = "INSERT INTO turmas (codigo, nome, turma, inicio, fim, chave_unica) VALUES ('$codigo', '$nome', '$turma', '$inicio', '$fim', '$chaveUnica')";

if ($mysqli->query($sql) === TRUE) {
    echo "Turma criada com sucesso!";
} else {
    echo "Erro ao criar a turma: " . $mysqli->error;
}

// Fechar a conexão com o banco de dados
$mysqli->close();
?>
