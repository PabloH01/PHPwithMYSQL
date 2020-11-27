<<<<<<< HEAD:conexao.php
<?php

$host = "ec2-54-226-165-161.compute-1.amazonaws.com";
$user = "19116";
$pass = "19116pablo";
$banco = "etim_19116";

$conexao = mysqli_connect($host, $user, $pass, $banco)
        or die("Problemas com a conexão do Banco de Dados");
mysqli_set_charset($conexao, "UTF8");
?>
=======
<?php

$host = "localhost";
$user = "root";
$pass = "usbw";
$banco = "banco";

$conexao = mysqli_connect($host, $user, $pass, $banco)
        or die("Problemas com a conexão do Banco de Dados");
mysqli_set_charset($conexao, "UTF8");
?>
>>>>>>> e644c0d3fd27f0f6baf51831717d425af3305c32:trabalhoimagens/conexao.php
