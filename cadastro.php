<?php
   include './lib/bancoDados.php';
   $alunos = listaAlunos();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/css/reset.css">
    <link rel="stylesheet" href="./assests/css/estilo.css">
    <script src="./assets/script.js" defer></script>
    <title>Cadastro</title>
    <style type="text/css">
        li{
          color: #ffffff;
        }
    </style>
</head>
<body>
    <header>
        <td><img  width="80" height="80" src="./assests/logo.png" alt=""/></td>
        <td><h1>Cadastro</h1></td>
    </header>
        <div class="cabecalho">
            <ul>
                <li>
                    <a href="index.php" class="button">Home</a>
                </li>
                    <a href="listaAlunos.php" class="button">Alunos</a>
                <li>
                    <a href="#" class="button">Cadastro</a>
                </li>
            </ul>
        </div>
    <section class="cadastro">
    <main class="perguntas">
        <form action="/listaAlunos.php" method="post">
            <ul>
                <li>Nome: <input class="nome" type="text" name="nome" /></li>
                <li>Idade: <input class="idade" type="" name="idade" /></li>
            <li>
                <label for="">Sexo: </label>
                <select class="box-sexo" name="sexo">
                    <option value="Selecione">Selecione</option>
                    <option value="Masculino">Masculino</option>
                    <option  value="Feminino">Feminino</option>
                </select>
            </li>
                <li><input id= "envio" type="submit" name = "envio" /></li>
            </ul>
        </form>
        </section>
    </main>
    <footer>
    </footer>
</body>
</html>
