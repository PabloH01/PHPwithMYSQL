<?php

include_once('conexao.php');

$nomeImagem = $_GET["nomeImagem"];
$tipografia = $_POST["tipoImagem"];
if($tipografia == "PNG"){
    $nome_final = $nomeImagem . ".png";
}
else if ($tipografia == "JPG"){
    $nome_final = $nomeImagem . ".jpg";
}

if (substr($_FILES['arquivo']['name'], -3) == "png" || substr($_FILES['arquivo']['name'], -3) == "jpg") {
    $dir = './arquivos/';
    $tmpName = $_FILES['arquivo']['tmp_name'];
    $name = $_FILES['arquivo']['name'];
    // move_uploaded_file
    if (move_uploaded_file($tmpName, $dir . $nome_final)) {
         $sqlstring = "insert into imagens (id, arquivo, nomeImagem) values (null, '$nome_final', '$nome_final')";
        mysqli_query($conexao, $sqlstring);
        header('Location: index.php');
    } else {
        echo "Erro ao colocar sua imagem! Confira e tente novamente :D";
    }
} else {
    echo "O documento não é de uma tipografia aceitavél. Tente novamente!";
}
?>


