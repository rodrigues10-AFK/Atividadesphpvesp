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

<body>
    <?php
    include "banco.php";
    $sql = "SELECT * FROM alunos";
    $resultado = $conexao->query($sql);
    while ($cliente = $resultado->fetch_assoc()) {
        echo "Nome: " . $cliente['nome'], '<p>';
        echo "Idade: " . $cliente['idade'], '<p>';
        echo "Curso: " . $cliente['curso'], '<p>';
        echo "Cidade: " . $cliente['cidade'], '<p>';
        echo "Entrega: " . $cliente['entrega'], '<p>';
        echo "<hr>";
    } ?> 
    </body>

</html>
