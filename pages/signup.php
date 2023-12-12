<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Code</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <!--main start-->
    <main>
    <h1>Student Code</h1>
    <form action="../backend/cadastrar.php" method="post">
        <h2>Cadastro</h2>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm-password">Insira sua senha novamente:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>

        <label>Selecione sua opção:</label>
        <input type="radio" id="aluno" name="tipo" value="aluno" checked>
        <label class="toggle-btn" for="aluno">Aluno</label>

        <input type="radio" id="professor" name="tipo" value="professor">
        <label class="toggle-btn" for="professor">Professor</label>

        <button type="submit">Cadastrar</button>

        <a href="signin.php">Já possui uma conta?</a>
    </form>
    </main>
    <!--main end-->

    <!--footer start-->
    <footer>
        <div>
        <h5>Informações de Contato</h5>
        <p>Endereço: Rua Fileto Pires, 1263</p>
        <p>Email: rennandev7@gmail.com</p>
        <p>WhatsApp: (92) 99166-0915</p>
        </div>
    </footer>
  <!--footer end-->
</body>
</html>
