<?php


function conecta()
{

   //Criando sa variáveis para a facilidade de manutenção do código.
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $base = "brincadeira";
    
    //Iniciando uma conexão com o banco de dados.
    $conexao = new mysqli($servidor, $usuario, $senha, $base);

    //Verificando se ocorreu um erro na conexão com a base de dados.
    if($conexao->connect_error){

        //Se a conexão falhar, vamos mostrar um erro na tela e parar a execução.
        die("Erro de conexão: " . $conexao->connect_error);

    } else {

    //Se tudo ocorrer bem vamos, será retornado a base de dados.
    return $conexao;
    }

}

?>