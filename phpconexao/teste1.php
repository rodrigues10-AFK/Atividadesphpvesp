<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>

    <h1>Resultado da soma</h1>

    <?php
    include "conexao.php";

    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $obs = $_POST['mensagem'];


    $resultado = $num1 + $num2;

    $sql = "INSERT INTO formsoma (numero1, numero2, resultado, mensagem)
            VALUES ($num1, $num2, $resultado,$obs)";

    
    if ($conexao->query($sql)) {
        echo "<br>Dados salvos com sucesso!";
    } else {
        echo "<br>Erro ao salvar: " . $conexao->error;
    }

    echo "<p>A soma dos dois números é: $resultado</p>";

    echo "<p>Observação: $obs</p>";

    ?>

</body>

</html>