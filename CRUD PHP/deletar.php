<?php

require_once "./bd_conexao.php";
$conexao = conecta();

$query = "DELETE * FROM cadastro WHERE id = ?";

$result = $conexao->query($query);
$dados = $result->fetch_assoc();

var_dump($dados);
exit();

?>