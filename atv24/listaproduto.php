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
    $sql = "SELECT * FROM prod";
    $resultado = $conexao->query($sql);
    while ($cliente = $resultado->fetch_assoc()) {
        echo "Produto 1: " . $cliente['produto1'], '<p>';
        echo "Produto 2: " . $cliente['produto2'], '<p>';
        echo "Produto 3: " . $cliente['produto3'], '<p>';
    } ?> 
    </body>

</html>