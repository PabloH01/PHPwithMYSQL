<?php

include_once('conexao.php');

$nomeImagem = $_POST["nomeImagem"];
$tipografia = $_POST["tipoImagem"]
if($tipografia == 1){
    $nome_final = ".png";
}
else if ($tipografia == 2){
    $nome_final = ".jpg";
}

if (substr($_FILES['arquivo']['nomeImagem'], -3) == "png" || substr($_FILES['arquivo']['nomeImagem'], -3) == "jpg") {
    $dir = './arquivos/';
    $tmpName = $_FILES['arquivo']['tmp_name'];
    $name = $_FILES['arquivo']['name'];
    // move_uploaded_file
    if (move_uploaded_file($tmpName, $dir . $nome_final)) {
         $sqlstring = "insert into imagens (id, arquivo, nomeImagem) values (null, '$nome_final')";
        mysqli_query($conexao, $sqlstring);
        header('Location: index.php');
    } else {
        echo "Erro ao colocar sua imagem! Confira e tente novamente :D";
    }
} else {
    echo "O documento não é de uma tipografia aceitavél. Tente novamente!";
}
?>


