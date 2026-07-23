<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes Cadastrados</title>

    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e3a8a, #111827);
            color: #fff;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            font-family: 'Orbitron', sans-serif;
            color: #00e5ff;
            text-shadow: 0 0 15px #00e5ff;
        }

        .card {
            background: rgba(255, 255, 255, .08);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 18px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .3);
            transition: .3s;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: #00e5ff;
            box-shadow: 0 0 20px rgba(0, 229, 255, .4);
        }

        .nome {
            font-size: 28px;
            font-family: 'Orbitron', sans-serif;
            color: #00e5ff;
            margin-bottom: 20px;
        }

        .dados {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 15px;
        }

        .box {
            background: #1e293b;
            padding: 15px;
            border-radius: 12px;
            border-left: 4px solid #00e5ff;
        }

        .titulo {
            font-size: 12px;
            color: #94a3b8;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .valor {
            font-size: 18px;
            font-weight: bold;
        }

        .acoes {
            grid-column: 1/-1;
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 20px;
        }

        .acoes a {
            text-decoration: none;
        }

        .acoes button {
            border: none;
            padding: 12px 28px;
            border-radius: 10px;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
        }

        .editar {
            background: #0ea5e9;
        }

        .editar:hover {
            background: #0284c7;
            transform: scale(1.05);
        }

        .excluir {
            background: #ef4444;
        }

        .excluir:hover {
            background: #dc2626;
            transform: scale(1.05);
        }

        .footer {
            text-align: center;
            color: #94a3b8;
            margin-top: 30px;
            padding-bottom: 20px;
        }

        @media(max-width:768px) {

            h1 {
                font-size: 30px;
            }

            .acoes {
                justify-content: center;
                flex-wrap: wrap;
            }

            .acoes button {
                width: 150px;
            }

        }

        .pesquisa {
            width: 100%;
            display: flex;
            justify-content: center;
            margin: 0 auto 35px;
        }

        .pesquisa input {
            width: 100%;
            max-width: 700px;
            padding: 16px 22px;
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            background: rgba(255, 255, 255, 0.08);
            border: 2px solid rgba(0, 229, 255, 0.35);
            border-radius: 50px;
            outline: none;
            backdrop-filter: blur(12px);
            transition: all .35s ease;
            box-shadow:
                0 0 12px rgba(0, 229, 255, .15),
                inset 0 0 8px rgba(255, 255, 255, .05);
        }

        .pesquisa input::placeholder {
            color: #94a3b8;
            font-size: 15px;
        }

        .pesquisa input:focus {
            border-color: #00e5ff;
            box-shadow:
                0 0 15px rgba(0, 229, 255, .6),
                0 0 35px rgba(0, 229, 255, .35),
                inset 0 0 10px rgba(255, 255, 255, .08);
            transform: scale(1.02);
        }

        @media (max-width: 768px) {
            .pesquisa input {
                max-width: 100%;
                padding: 14px 18px;
                font-size: 15px;
            }
        }
    </style>

</head>

<body>

    <div class="container">

        <h1>⚡ EVENTOS CADASTRADOS ⚡</h1>
        <div class="pesquisa">
            <input
            type="text"
            id="pesquisarEvento"
            placeholder="🔍 Pesquisar evento, cidade ou local...">
        </div>
        <?php

        include "banco.php";

        $sql = "SELECT * FROM eventos";

        $resultado = $conexao->query($sql);

        if ($resultado->num_rows > 0) {

            while ($cliente = $resultado->fetch_assoc()) {

        ?>

                <div class="card evento-card">


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
        } else {

            echo "<h2 style='text-align:center;color:#00f7ff;'>Nenhum cliente cadastrado.</h2>";
        }

        $conexao->close();

        ?>

        <div class="footer">
            Sistema de Cadastro • Interface Futurista
        </div>

    </div>

<script>
const pesquisa = document.getElementById("pesquisarEvento");
const cards = document.querySelectorAll(".evento-card");

pesquisa.addEventListener("input", function () {

    const texto = this.value.toLowerCase();

    cards.forEach(card => {

        const nome = card.querySelector(".nome").textContent.toLowerCase();
        const valores = card.querySelectorAll(".valor");

        const local = valores[2].textContent.toLowerCase();
        const cidade = valores[3].textContent.toLowerCase();

        if (
            nome.includes(texto) ||
            local.includes(texto) ||
            cidade.includes(texto)
        ) {
            card.style.display = "";
        } else {
            card.style.display = "none";
        }
    });

});
</script>
</body>

</html>