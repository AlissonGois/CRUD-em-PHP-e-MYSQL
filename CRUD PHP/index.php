<?php
Require_once "./bd_conexao.php";
$conexao = conecta();
$pulaLinha = "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de PHP</title>
</head>
<body>
    <h1>Cadastro para Aprendizado</h1><?= $pulaLinha?>
    <form action="enviar.php" method="post">
        <input type="text" id="nome" name="nome" placeholder="nome"/><?= $pulaLinha?>
        <input type="text" id="email" name="email" placeholder="email"/><?= $pulaLinha?>
        <input type="submit" id="enviar" name="enviar" value="Enviar"/>
    </form>
    <form action="listar.php" method="post">
    <button type ="submit" id="listar" class="listar" value="<?= $id?>">Listar</button>
    </form>
</body>
</html>