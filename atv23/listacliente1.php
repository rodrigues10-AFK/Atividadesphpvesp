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
        $sql = "SELECT * FROM form";
        $resultado = $conexao->query($sql);
        while ($cliente = $resultado->fetch_assoc()) {
            echo "Nome: " . $cliente['nome'], '<p>';
            echo "Email: " . $cliente['email'], '<p>';
            echo "Idade: " . $cliente['idade'], '<p>';
            echo "Telefone: " . $cliente['telefone'], '<p>';
            echo "Cidade: " . $cliente['cidade'], '<p>';
            echo "<hr>";
        } ?> </body>

</html>