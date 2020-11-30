<?php

include_once('conexao.php');
$id = $_GET['id'];
echo "<img src='arquivos/?id=" . $dados['arquivo'] . "' width='100%' heigth='100%'>";
?>