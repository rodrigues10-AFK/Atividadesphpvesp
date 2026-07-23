<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: gray;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            padding: 40px;
            max-width: 500px;
            width: 100%;
        }

        h1 {
            color: #bdbdd4;
            font-size: 28px;
            margin-bottom: 30px;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        p {
            color: #333;
            font-size: 16px;
            margin: 15px 0;
            line-height: 1.6;
            padding: 15px;
            background-color: #f8f9fa;
            border-left: 4px solid #667eea;
            border-radius: 4px;
        }

        br {
            display: none;
        }

        .success-message {
            color: #28a746c0;
            font-weight: bold;
            padding: 12px;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .error-message {
            color: #dc3545;
            font-weight: bold;
            padding: 12px;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 4px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Resultado da soma</h1>

        <?php
        include "";

        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $obs = $_POST['mensagem'];


        $resultado = $num1 + $num2;

        $sql = "INSERT INTO formsoma (numero1, numero2, resultado, obs)
                VALUES ($num1, $num2, $resultado, '$obs')";

        
         if ($conexao->query($sql)) {
            echo "<div class='success-message'>✓ Dados salvos com sucesso!</div>";
        } else {
            echo "<div class='error-message'>✗ Erro ao salvar: " . $conexao->error . "</div>";
        }

        echo "<p><strong>Soma:</strong> $resultado</p>";

        echo "<p><strong>Observação:</strong> $obs</p>";

        ?>
    </div>
</body>

</html>