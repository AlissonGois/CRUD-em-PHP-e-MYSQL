<?php
require_once("./bd_conexao.php");
$conexao = conecta();

$query = "SELECT * FROM cadastro ORDER BY id";

$result = $conexao->query($query);
$dados = $result->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cadastros Realizados</title>
</head>
<body>
    <table width="100%" border="1px">
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th colspan="2">Ações</th>
        <tbody>
            <?php foreach($dados as $dado):?>
            <tr>
                <td><?php echo $dado['id']; ?></td>
                <td><?php echo $dado['nome']; ?></td>
                <td><?php echo $dado['email']; ?></td>
                <td><a class="btn btn-sm btn-primary">Editar</a></td>
                <td><button Class="btn btn-sm btn-danger" onclick="excluir(<?= $dados['id']?>)">Excluir</button></td>

            </tr>
            <?php endforeach; ?>
            <tr>
                <td>
                  <a onclick="history.go(-1)"><button>Voltar</button></a>
                </td>
            </tr>
        </tbody>
        
    </table>
    
</body>
</html>