<?php
   include './lib/bancoDados.php';
    $alunos = listaAlunos();
    $nome= htmlspecialchars($_POST['nome']) ;
    $idade= (int) $_POST['idade'];
    $sexo= $_POST['sexo'];
    $pessoa = array('nome' => ($_POST['nome']), 'idade' => ($_POST['idade']), 'sexo' => ($_POST['sexo']));
    array_push($alunos, $pessoa);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/css/reset.css">
    <link rel="stylesheet" href="./assests/css/estilo.css">
    <title>Lista Alunos</title>
</head>
<body>
    <header>
        <td><img  width="30" height="30" src="./assests/logo.png" alt=""/></td>
        <td><h3 class="inicio">Lista de Alunos</h3></td>
    </header>
    <div class="cabecalho">
        <ul>
            <li>
                <a href="/index.php">Home</a>
            </li>
            <li>
                <a href="/listaAlunos.php">Alunos</a>
            </li>
            <li>
                <a href="/cadastro.php">Cadastro</a>
            </li>
        </ul>
    </div>
    <main class="list">
        <?php
        echo '<table>';
        echo '<tr>';
        echo '<th> Nome ' . '</th>';
        echo '<th> Idade '. '</th>';
        echo '<th> Sexo ' . '</th>';
        echo '</tr>';
        for($i=0; $i< count($alunos); $i++){
            echo '<tr>';
            echo '<td>' . $alunos[$i] ['nome'] . '</td>';
            echo '<td>' . $alunos[$i] ['idade'] . '</td>';
            $sSexo = $alunos[$i] ['sexo'];
            $sexo = '';
            if($sSexo == 'f'){
                $sexo = 'Feminino';
            } else if ($sSexo == 'm'){
                $sexo = 'Masculino';
            }
            echo '<td>' . $sexo. '</td>';
            echo '</tr>';
        }
        echo '</table>';
       ?>
    </main>
    <footer>
    </footer>
</body>
</html>
