<?php
include("../../backend/mostrar_turmas.php");

// Obtém as turmas
$turmas = exibirTurmas();
?>
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
        <h1>Minha(s) Turma(s)</h1>

        <?php
        // Exibir as turmas em cards
        while ($row = $turmas->fetch_assoc()) {
            ?>
            <div class="card">
                <h2><?php echo $row['nome']; ?></h2>
                <p>Código: <?php echo $row['codigo']; ?></p>
                <p>Turma: <?php echo $row['turma']; ?></p>
                <p>Horário: <?php echo $row['inicio'] . ' - ' . $row['fim']; ?></p>
                <!-- Adicione mais informações conforme necessário -->

                <!-- Se você quiser adicionar um link para mais detalhes, substitua '#' pelo URL correto -->
                <a href="#">Detalhes</a>
            </div>
            <?php
        }
        ?>
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
