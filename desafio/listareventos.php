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
    background:linear-gradient(135deg,#0f172a,#1e3a8a,#111827);
    color:#fff;
    min-height:100vh;
}

.container{
    width:90%;
    max-width:1200px;
    margin:40px auto;
}

h1{
    text-align:center;
    margin-bottom:40px;
    font-family:'Orbitron',sans-serif;
    color:#00e5ff;
    text-shadow:0 0 15px #00e5ff;
}

.card{
    background:rgba(255,255,255,.08);
    backdrop-filter:blur(12px);
    border:1px solid rgba(255,255,255,.1);
    border-radius:18px;
    padding:25px;
    margin-bottom:25px;
    box-shadow:0 10px 25px rgba(0,0,0,.3);
    transition:.3s;
}

.card:hover{
    transform:translateY(-5px);
    border-color:#00e5ff;
    box-shadow:0 0 20px rgba(0,229,255,.4);
}

.nome{
    font-size:28px;
    font-family:'Orbitron',sans-serif;
    color:#00e5ff;
    margin-bottom:20px;
}

.dados{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:15px;
}

.box{
    background:#1e293b;
    padding:15px;
    border-radius:12px;
    border-left:4px solid #00e5ff;
}

.titulo{
    font-size:12px;
    color:#94a3b8;
    text-transform:uppercase;
    margin-bottom:6px;
}

.valor{
    font-size:18px;
    font-weight:bold;
}

.acoes{
    grid-column:1/-1;
    display:flex;
    justify-content:flex-end;
    gap:15px;
    margin-top:20px;
}

.acoes a{
    text-decoration:none;
}

.acoes button{
    border:none;
    padding:12px 28px;
    border-radius:10px;
    color:#fff;
    font-weight:600;
    cursor:pointer;
    transition:.3s;
}

.editar{
    background:#0ea5e9;
}

.editar:hover{
    background:#0284c7;
    transform:scale(1.05);
}

.excluir{
    background:#ef4444;
}

.excluir:hover{
    background:#dc2626;
    transform:scale(1.05);
}

.footer{
    text-align:center;
    color:#94a3b8;
    margin-top:30px;
    padding-bottom:20px;
}

@media(max-width:768px){

    h1{
        font-size:30px;
    }

    .acoes{
        justify-content:center;
        flex-wrap:wrap;
    }

    .acoes button{
        width:150px;
    }

}

    </style>

</head>

<body>

<div class="container">

<h1>⚡ EVENTOS CADASTRADOS ⚡</h1>

<?php

include "banco.php";

$sql = "SELECT * FROM eventos";

$resultado = $conexao->query($sql);

if($resultado->num_rows > 0){

    while($cliente = $resultado->fetch_assoc()){

?>

<div class="card">

    <div class="nome">
        <?php echo $cliente['nome_evento']; ?>
    </div>

    <div class="dados">

        <div class="box">
            <div class="titulo">Data</div>
            <div class="valor"><?php echo $cliente['data_evento']; ?></div>
        </div>

        <div class="box">
            <div class="titulo">Horário</div>
            <div class="valor"><?php echo $cliente['horario']; ?></div>
        </div>

        <div class="box">
            <div class="titulo">Local</div>
            <div class="valor"><?php echo $cliente['local_evento']; ?></div>
        </div>

        <div class="box">
            <div class="titulo">Cidade</div>
            <div class="valor"><?php echo $cliente['cidade']; ?></div>
        </div>

        <div class="box">
            <div class="titulo">Quantidade de vagas</div>
            <div class="valor"><?php echo $cliente['quantidade_de_vagas']; ?></div>
        </div>

        <div class="acoes">

            <a href="editarevento.php?id=<?php echo $cliente['id']; ?>">
                <button class="editar">Editar</button>
            </a>

            <a href="excluirevento.php?id=<?php echo $cliente['id']; ?>">
            <button class="excluir">Excluir</button>
            </a>
                        
                
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