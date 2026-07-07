<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes Cadastrados</title>

    <!-- Fonte -->
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
            background:
            radial-gradient(circle at top,#1d4ed8 0%,#0f172a 35%,#020617 100%);
            color:#fff;
            overflow-x:hidden;
        }

        /* Fundo com efeito */
        body::before{
            content:"";
            position:fixed;
            width:700px;
            height:700px;
            background:#00e5ff;
            filter:blur(250px);
            opacity:.15;
            top:-250px;
            left:-150px;
            z-index:-1;
        }

        body::after{
            content:"";
            position:fixed;
            width:600px;
            height:600px;
            background:#7c3aed;
            filter:blur(220px);
            opacity:.12;
            bottom:-200px;
            right:-150px;
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
            font-size:45px;
            margin-bottom:50px;
            color:#00f7ff;
            text-shadow:
            0 0 10px #00f7ff,
            0 0 20px #00f7ff,
            0 0 40px #00f7ff;
        }

        .card{
            position:relative;
            margin-bottom:35px;
            border-radius:20px;
            padding:30px;
            background:rgba(255,255,255,.05);
            backdrop-filter:blur(18px);
            border:1px solid rgba(0,247,255,.3);
            box-shadow:
            0 0 25px rgba(0,247,255,.15),
            inset 0 0 20px rgba(255,255,255,.03);
            transition:.4s;
            overflow:hidden;
        }

        .card::before{
            content:"";
            position:absolute;
            width:250px;
            height:250px;
            background:linear-gradient(45deg,#00f7ff,#7c3aed);
            border-radius:50%;
            top:-130px;
            right:-130px;
            opacity:.15;
        }

        .card:hover{
            transform:translateY(-10px) scale(1.01);
            box-shadow:
            0 0 35px rgba(0,247,255,.45),
            0 0 60px rgba(0,247,255,.2);
            border-color:#00f7ff;
        }

        .nome{
            font-family:'Orbitron',sans-serif;
            font-size:28px;
            color:#00f7ff;
            margin-bottom:25px;
            letter-spacing:2px;
        }

        .dados{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:20px;
        }

        .box{
            background:rgba(255,255,255,.05);
            border:1px solid rgba(255,255,255,.08);
            border-radius:15px;
            padding:18px;
            transition:.3s;
        }

        .box:hover{
            border-color:#00f7ff;
            box-shadow:0 0 20px rgba(0,247,255,.3);
        }

        .titulo{
            font-size:13px;
            text-transform:uppercase;
            color:#8ec5ff;
            margin-bottom:8px;
            letter-spacing:2px;
        }

        .valor{
            font-size:20px;
            color:white;
            font-weight:bold;
            word-break:break-word;
        }

        .footer{
            text-align:center;
            margin-top:40px;
            color:#8ba3c7;
            font-size:14px;
        }

        @media(max-width:768px){

            h1{
                font-size:32px;
            }

            .nome{
                font-size:22px;
            }

        }

    </style>

</head>

<body>

<div class="container">

<h1>⚡ CLIENTES CADASTRADOS ⚡</h1>

<?php

include "banco.php";

$sql = "SELECT * FROM form";

$resultado = $conexao->query($sql);

if($resultado->num_rows > 0){

    while($cliente = $resultado->fetch_assoc()){

?>

<div class="card">

    <div class="nome">
        <?php echo $cliente['nome']; ?>
    </div>

    <div class="dados">

        <div class="box">
            <div class="titulo">Email</div>
            <div class="valor"><?php echo $cliente['email']; ?></div>
        </div>

        <div class="box">
            <div class="titulo">Idade</div>
            <div class="valor"><?php echo $cliente['idade']; ?> anos</div>
        </div>

        <div class="box">
            <div class="titulo">Telefone</div>
            <div class="valor"><?php echo $cliente['telefone']; ?></div>
        </div>

        <div class="box">
            <div class="titulo">Cidade</div>
            <div class="valor"><?php echo $cliente['cidade']; ?></div>
        </div>

    </div>

</div>

<?php

    }

}else{

    echo "<h2 style='text-align:center;color:#00f7ff;'>Nenhum cliente cadastrado.</h2>";

}

$conexao->close();

?>

<div class="footer">
    Sistema de Cadastro • Interface Futurista
</div>

</div>

</body>
</html>