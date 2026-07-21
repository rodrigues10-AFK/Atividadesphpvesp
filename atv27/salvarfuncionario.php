<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        .actions {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .btn-primary {
            background: #2563eb;
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 12px 24px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .btn-primary:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <?php
    include "banco.php";

    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $departamento = $_POST['departamento'];
    $salario = $_POST['salario'];
    $admissao = $_POST['admissao'];

    $sql = "INSERT INTO funcionario (nome, cargo, departamento, salario, admissao)
    VALUES ('$nome','$cargo','$departamento','$salario','$admissao')
    ";

    if ($conexao->query($sql)) {
        echo "<div class='success-message'>✓ Dados salvos com sucesso!</div>";
    } else {
        echo "<div class='error-message'>✗ Erro ao salvar: " . $conexao->error . "</div>";
    }

    ?>
    <div class="actions">
        <a href="form.php">
            <button class="btn-primary">Voltar</button>
        </a>
    </div>
</body>

</html>