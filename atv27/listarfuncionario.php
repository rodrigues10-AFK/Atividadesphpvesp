<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários Cadastrados</title>

    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Poppins',sans-serif;
            min-height:100vh;
            background:linear-gradient(135deg,#020617,#0f172a,#1e3a8a);
            color:#fff;
        }

        body::before{
            content:"";
            position:fixed;
            width:500px;
            height:500px;
            background:#00e5ff;
            filter:blur(180px);
            opacity:.15;
            top:-180px;
            left:-180px;
            z-index:-1;
        }

        body::after{
            content:"";
            position:fixed;
            width:500px;
            height:500px;
            background:#7c3aed;
            filter:blur(180px);
            opacity:.12;
            bottom:-180px;
            right:-180px;
            z-index:-1;
        }

        .container{
            width:90%;
            max-width:1200px;
            margin:auto;
            padding:50px 0;
        }

        h1{
            text-align:center;
            font-family:'Orbitron',sans-serif;
            font-size:42px;
            color:#00f7ff;
            margin-bottom:40px;
            text-shadow:0 0 15px #00f7ff;
        }

        .card{
            background:rgba(255,255,255,.06);
            backdrop-filter:blur(15px);
            border:1px solid rgba(0,247,255,.25);
            border-radius:20px;
            padding:30px;
            margin-bottom:30px;
            transition:.4s;
            box-shadow:0 0 20px rgba(0,247,255,.15);
        }

        .card:hover{
            transform:translateY(-8px);
            box-shadow:0 0 35px rgba(0,247,255,.45);
            border-color:#00f7ff;
        }

        .nome{
            font-size:28px;
            color:#00f7ff;
            font-family:'Orbitron',sans-serif;
            margin-bottom:25px;
        }

        .dados{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:20px;
        }

        .info{
            background:rgba(255,255,255,.05);
            padding:18px;
            border-radius:15px;
            border:1px solid rgba(255,255,255,.08);
            transition:.3s;
        }

        .info:hover{
            border-color:#00f7ff;
            box-shadow:0 0 20px rgba(0,247,255,.25);
        }

        .titulo{
            font-size:13px;
            text-transform:uppercase;
            color:#8ec5ff;
            margin-bottom:8px;
            letter-spacing:1px;
        }

        .valor{
            font-size:20px;
            font-weight:bold;
        }

        .acoes{
            margin-top:25px;
            display:flex;
            gap:15px;
        }

        .acoes a{
            text-decoration:none;
        }

        .acoes button{
            border:none;
            padding:12px 24px;
            border-radius:10px;
            cursor:pointer;
            color:#fff;
            font-weight:bold;
            transition:.3s;
            font-size:15px;
        }

        .editar{
            background:linear-gradient(90deg,#00f7ff,#2563eb);
        }

        .editar:hover{
            transform:translateY(-3px);
            box-shadow:0 0 20px #00f7ff;
        }

        .excluir{
            background:linear-gradient(90deg,#ef4444,#991b1b);
        }

        .excluir:hover{
            transform:translateY(-3px);
            box-shadow:0 0 20px #ef4444;
        }

        .footer{
            text-align:center;
            margin-top:40px;
            color:#8ba3c7;
        }

        @media(max-width:768px){

            h1{
                font-size:30px;
            }

            .acoes{
                flex-direction:column;
            }

            .acoes button{
                width:100%;
            }

        }

    </style>

</head>

<body>

<div class="container">

<h1>👨‍💼 FUNCIONÁRIOS CADASTRADOS 👨‍💼</h1>

<?php

include "banco.php";

$sql = "SELECT * FROM funcionario";
$resultado = $conexao->query($sql);

if($resultado->num_rows > 0){

while($cliente = $resultado->fetch_assoc()){

?>

<div class="card">

    <div class="nome">
        <?php echo $cliente['nome']; ?>
    </div>

    <div class="dados">

        <div class="info">
            <div class="titulo">Cargo</div>
            <div class="valor"><?php echo $cliente['cargo']; ?></div>
        </div>

        <div class="info">
            <div class="titulo">Departamento</div>
            <div class="valor"><?php echo $cliente['departamento']; ?></div>
        </div>

        <div class="info">
            <div class="titulo">Salário</div>
            <div class="valor">R$ <?php echo number_format($cliente['salario'],2,",","."); ?></div>
        </div>

        <div class="info">
            <div class="titulo">Admissão</div>
            <div class="valor"><?php echo $cliente['admissao']; ?></div>
        </div>

    </div>

    <div class="acoes">

        <a href="editarfuncionario.php?id=<?php echo $cliente['id']; ?>">
            <button class="editar">✏ Editar</button>
        </a>

        <a href="excluirfuncionario.php?id=<?php echo $cliente['id']; ?>">
            <button class="excluir">🗑 Excluir</button>
        </a>

    </div>

</div>

<?php
}

}else{

echo "<h2 style='text-align:center;color:#00f7ff;'>Nenhum funcionário cadastrado.</h2>";

}

$conexao->close();

?>

<div class="footer">
    Sistema de Funcionários • Interface Futurista
</div>

</div>

</body>
</html>