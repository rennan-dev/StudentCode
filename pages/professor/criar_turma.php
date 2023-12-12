<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Code</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

    <!--header start-->
    <header>
        <h1 id="professor">Professor</h1>
        <!-- Menu de navegação -->
        <nav>
            <ul>
                <li><a href="index.php">Perfil</a></li>
                <li><a href="../../backend/logout.php">Sair</a></li>
            </ul>
        </nav>
    </header>
    <!--header end-->   

    <!--main start-->
    <main>
        <h1>Criar Turma</h1>
        <form action="../../backend/criar_turma.php" method="post">
            <label for="codigo">Código da disciplina:</label>
            <input type="text" id="codigo" name="codigo" required>

            <label for="nome">Nome da disciplina:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="turma">Turma:</label>
            <input type="text" id="turma" name="turma" required>

            <label for="inicio">Início do Horário de Aula:</label>
            <input type="time" id="inicio" name="inicio" required>

            <label for="fim">Fim do Horário de Aula:</label>
            <input type="time" id="fim" name="fim" required>

            <div class="botoes_criar_turma">
            <button type="submit" class="cancelar">Cancelar</button>
            <button type="submit" class="criar-turma">Criar Turma</button>
            </div>
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
