<?php
    include './lib/bancoDados.php';
    $alunos= listaAlunos();
    $aluno = $alunos[0]['nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/css/reset.css">
    <link rel="stylesheet" href="./assests/css/estilo.css">
    <title>Home</title>
</head>
<body>
    <header>
        <td><img  width="80" height="80" src="./assests/logo.png" alt=""/></td>
        <td><h3 class="inicio">Início</h3></td>
    </header>
    <div class="cabecalho">
        <ul>
            <li>
                <a href="#" class="button">Home</a>
            </li>
            <li>
                <a href="listaAlunos.php" class="button">Alunos</a>
            </li>
            <li>
                <a href="cadastro.php" class="button">Cadastro</a>
            </li>
        </ul>
    </div>
        <main>
                <h1>Olá</h1>
        <ul>
            <?php
                echo '<li>'. $aluno.'</li>'
            ?>
        </ul>
    </main>
    <footer>
    </footer>
</body>
</html>
