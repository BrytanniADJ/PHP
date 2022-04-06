<?php
    include './lib/listar.php';

    $alunos = listaAlunos();
    $aluno = $alunos[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-wifth, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header>
        <a href="./index.php">Home</a>
        <a href="./listaAlunos.php">Alunos</a>
    </header>
    <main>
        Olá,
        <?php
            echo '<p>'. $aluno. '</p>'
        ?>
    </main>
</body>
</html>