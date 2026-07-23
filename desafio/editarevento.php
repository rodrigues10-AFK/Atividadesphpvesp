<?php 
include "banco.php";
$id= $_GET ['id']; 
$sql = "SELECT * FROM eventos WHERE id = $id";

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
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <main class="form-page">

      <form class="form-card" action="./atualizarevento.php" method="post">
       
        <h1>Atualizar cadastro</h1>

        <div class="form-row">
          <input type="hidden" class="form-control" id="numero1"  name="id" value="<?php echo $cliente['id']; ?>" >
        </div>

        <div class="form-row">
          <label for="name" class="form-label">Nome do evento:</label>
          <input type="text" class="form-control" id="numero1"  name="nome" value="<?php echo $cliente['nome_evento']; ?>">
        </div>

        <div class="form-row">
          <label for="email" class="form-label">Data:</label>
          <input type="date" class="form-control" id="email" name="data" value="<?php echo $cliente['data_evento']; ?>">
        </div>
        
        <div class="form-row">
          <label for="email" class="form-label">Horário:</label>
          <input type="time" class="form-control" id="email" name="horario" value="<?php echo $cliente['horario']; ?>">
        </div>

        <div class="form-row">
          <label for="email" class="form-label">Local:</label>
          <input type="text" class="form-control" id="email" name="local" value="<?php echo $cliente['local_evento']; ?>">
        </div>

        <div class="form-row">
          <label for="email" class="form-label">Cidade:</label>
          <input type="text" class="form-control" id="email" name="cidade" value="<?php echo $cliente['cidade']; ?>">
        </div>

        <div class="form-row">
          <label for="email" class="form-label">Quantidade de vagas:</label>
          <input type="number" class="form-control" id="email" name="vagas" value="<?php echo $cliente['quantidade_de_vagas']; ?>">
        </div>

        <div class="actions">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </form>


    </main>
  </body>
</html>
