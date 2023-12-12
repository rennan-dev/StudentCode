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
    <form action="../backend/logar.php" method="post">
        <h2>Login</h2>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>

        <a href="signup.php">Ainda não possui uma conta?</a>
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
