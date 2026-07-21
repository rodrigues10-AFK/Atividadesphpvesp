<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: gray;
        }

        while {
            color: white;
        }
    </style>
</head>

<body> <?php include "banco.php";
        $sql = "SELECT * FROM livros";
        $resultado = $conexao->query($sql);
        while ($cliente = $resultado->fetch_assoc()) {
            echo "Título: " . $cliente['titulo'], '<p>';
            echo "Autor: " . $cliente['autor'], '<p>';
            echo "Editora: " . $cliente['editora'], '<p>';
            echo "Publicação: " . $cliente['publicacao'], '<p>';
            echo "Páginas: " . $cliente['paginas'], '<p>';
            echo "<a href='editarlivro.php?id=" . $cliente['id'] . "'>  <button>Editar</button></a>";
            echo "<a href='excluir_livro.php?id=" . $cliente['id'] . "'>  <button>Excluir</button></a>";
            echo "<hr>";
           
        } ?> </body>

</html>