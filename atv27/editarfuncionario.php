<?php 
include "banco.php";
$id= $_GET ['id']; 
$sql = "SELECT * FROM funcionario WHERE id = $id";

$resultado = $conexao ->query($sql);
$cliente = $resultado ->fetch_assoc();


?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulário Simples</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./css/style.css">
    <style>
      :root {
        --bg: #f4f7fb;
        --card: #ffffff;
        --primary: #2563eb;
        --primary-dark: #1d4ed8;
        --text: #1f2937;
        --muted: #6b7280;
        --border: #dbe3f0;
        --shadow: 0 12px 30px rgba(37, 99, 235, 0.12);
      }

      * {
        box-sizing: border-box;
      }

      body {
        margin: 0;
        min-height: 100vh;
        font-family: Arial, Helvetica, sans-serif;
        background: linear-gradient(135deg, #eef4ff, #f8fbff);
        color: var(--text);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 24px;
      }

      .form-page {
        width: 100%;
        display: flex;
        justify-content: center;
      }

      .form-card {
        width: 100%;
        max-width: 600px;
        background: var(--card);
        padding: 28px;
        border-radius: 18px;
        box-shadow: var(--shadow);
        border: 1px solid rgba(37, 99, 235, 0.08);
      }

      h1 {
        text-align: center;
        margin: 0 0 24px;
        font-size: 1.8rem;
        color: var(--primary-dark);
      }

      .form-row {
        margin-bottom: 18px;
      }

      .form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 700;
        color: var(--text);
      }

      .form-control {
        width: 100%;
        padding: 12px 14px;
        border: 1px solid var(--border);
        border-radius: 10px;
        font-size: 1rem;
        background: #fbfdff;
        transition: 0.2s ease;
      }

      .form-control:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
      }

      .actions {
        margin-top: 24px;
        display: flex;
        justify-content: center;
      }

      .btn-primary {
        border: none;
        background: var(--primary);
        color: #fff;
        padding: 12px 24px;
        border-radius: 10px;
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        transition: 0.2s ease;
      }

      .btn-primary:hover {
        background: var(--primary-dark);
      }

      @media (max-width: 600px) {
        .form-card {
          padding: 20px;
        }

        h1 {
          font-size: 1.5rem;
        }
      }
    </style>
  </head>
  <body>
    <main class="form-page">

      <form class="form-card" action="./atualizarfuncionario.php" method="post">
       
        <h1>Atualizar cadastro</h1>

        <div class="form-row">
          <input type="hidden" class="form-control" id="numero1"  name="id" value="<?php echo $cliente['id']; ?>" >
        </div>

        <div class="form-row">
          <label for="name" class="form-label">Nome Completo:</label>
          <input type="text" class="form-control" id="numero1"  name="nome" value="<?php echo $cliente['nome']; ?>">
        </div>

        <div class="form-row">
          <label for="email" class="form-label">Cargo:</label>
          <input type="text" class="form-control" id="email" name="cargo" value="<?php echo $cliente['cargo']; ?>">
        </div>
        
        <div class="form-row">
          <label for="email" class="form-label">Departamento:</label>
          <input type="text" class="form-control" id="email" name="departamento" value="<?php echo $cliente['departamento']; ?>">
        </div>

        <div class="form-row">
          <label for="email" class="form-label">Salário:</label>
          <input type="number" class="form-control" id="email" name="salario" value="<?php echo $cliente['salario']; ?>">
        </div>

        <div class="form-row">
          <label for="email" class="form-label">Data de Admissão:</label>
          <input type="date" class="form-control" id="email" name="admissao" value="<?php echo $cliente['admissao']; ?>">
        </div>

        <div class="actions">
          <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
      </form>


    </main>
  </body>
</html>

