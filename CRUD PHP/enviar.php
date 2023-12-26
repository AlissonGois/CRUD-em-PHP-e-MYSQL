<?php
    Require_once("./bd_conexao.php");
    $conexao = conecta();
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $query = "INSERT INTO cadastro(id,nome,email) VALUES('?','$nome','$email')";

    $result = mysqli_query($conexao, $query);

    if($result){

        //Faz com que apareça a janela de cadastro efetuado com sucesso.
        echo "<script>alert('Cadatro efetuado com sucesso!')</script>";

        // Redireciona para a página principal após o cadastro bem-sucedido
        echo "<script>window.location.href = 'index.php';</script>";
    
    } else {
        
        //Faz com que apareça a janela de Erro ao cadastrar.
        echo "<script>alert('Erro ao cadastrar!')</script>";

        // Redireciona para a página principal após o cadastro bem-sucedido
        echo "<script>window.location.href = 'index.php';</script>";
    }

    
?>