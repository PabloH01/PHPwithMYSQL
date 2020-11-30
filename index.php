<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> PHP - UPLOAD de Arquivos </title>
    </head>
    <body>
        <h1> Atividade de WEB - IMAGENS </h1>
        <div>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label for="arquivo">Arquivo:</label> <input type="file" name="arquivo" id="arquivo" /><br>
                <label>Insira um nome para sua imagem:  <input type = "text" name = "nomeImagem"/><br></label>
                <label>Digite 1 para uma imagem PNG e 2 caso for JPG<input type = "number" name = "tipoImagem" width= "10px"><label>
                <br><br>
                <input type="submit" value="Enviar" />
            </form>
        </div>
        <?php
        include_once('conexao.php');
        $sqlstring = 'select * from imagens order by asc';
        $resultado = mysqli_query($conexao, $sqlstring);
        while ($dados = mysqli_fetch_array($resultado)) {
            echo " ". $dados['nomeImagem'];
            echo "<a href='visualizar.php?id=" . $dados['id'] . "'><img src='abrir.png'></a>";
            echo "<a href='apagar.php?id=" . $dados['id'] . "'><img src='delete.png'></a>";
        }
        ?>
    </body>
</html>