<?php
    //Globais
    $alunos = ['Bianca','Wisley','Claudia', 'Luiza', 'Marcos', 'Michele', 'Pedro', 'Sávio'];

    //pesquisar como se cria objetos php usando ARRAY
    //fazer o vetor de alunos como objetos, no qual voces vão colocar nome, idade e sexo nesse objeto
    //e criar um vetor de objeto aluno

    function listaAlunos(){
        return $GLOBALS['alunos'];
   }
    function conectar(){ 
        $server = '127.0.0.1';
        $username = 'root';
        $password = '';
        $database = 'programadorweb';

    $link = mysqli_connect($server, $username, $password, $database);
    
    if(mysqli_connect_errno()){
        echo 'mysqli connection error: ' . mysqli_connect_error();
    }else{
        return $link;
    }
 }
    function listar_alunos(){
        $link = conectar();
        $result = mysqli_query($link, "SELECT nome, idade, sexo FROM alunos", MYSQLI_USE_RESULT);

        return $result;

        mysqli_close($link);
    }
    var_dump(listar_alunos())
?>