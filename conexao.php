<?php

$host = "ec2-54-226-165-161.compute-1.amazonaws.com";
$user = "19116";
$pass = "19116pablo";
$banco = "etim_19116";

$conexao = mysqli_connect($host, $user, $pass, $banco)
        or die("Problemas com a conexão do Banco de Dados".mysqli_connect_error());
mysqli_set_charset($conexao, "UTF8");
?>