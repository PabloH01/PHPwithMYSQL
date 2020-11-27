<?php

include_once('conexao.php');
$id = $_GET['id'];

// recuperando o nome do arquivo 
$sqlselect = "select * from imagens where id=$id";
$resultado = mysqli_query($conexao, $sqlselect);
$dados = mysqli_fetch_array($resultado);
$nome = $dados['arquivo'];

// excluindo o registro
$sqldelete = "delete from imagens where id=$id";
mysqli_query($conexao, $sqldelete);

unlink('arquivos/' . $nome);
header('Location: index.php');
?>
