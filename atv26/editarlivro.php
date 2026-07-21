<?php 
include "banco.php";
$id= $_GET ['id']; 
$sql = "SELECT * FROM livros WHERE id = $id";

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
  </head>
  <body>
    <main class="form-page">

      <form class="form-card" action="./atualizarlivro.php" method="post">
       
        <h1>Atualizar cadastro</h1>

        <div class="form-row">
          <input type="hidden" class="form-control" id="numero1"  name="id" value="<?php echo $cliente['id']; ?>" >
        </div>

        <div class="form-row">
          <label for="name" class="form-label">Titulo do livro:</label>
          <input type="text" class="form-control" id="numero1"  name="nome" value="<?php echo $cliente['titulo']; ?>">
        </div>

        <div class="form-row">
          <label for="email" class="form-label">Autor:</label>
          <input type="text" class="form-control" id="email" name="autor" value="<?php echo $cliente['autor']; ?>">
        </div>
        
        <div class="form-row">
          <label for="email" class="form-label">Editora:</label>
          <input type="text" class="form-control" id="email" name="editora" value="<?php echo $cliente['editora']; ?>">
        </div>

        <div class="form-row">
          <label for="email" class="form-label">Publicação:</label>
          <input type="tel" class="form-control" id="email" name="publicacao" value="<?php echo $cliente['publicacao']; ?>">
        </div>

        <div class="form-row">
          <label for="email" class="form-label">Quantidade de páginas:</label>
          <input type="number" class="form-control" id="email" name="paginas" value="<?php echo $cliente['quantidade']; ?>">
        </div>

        <div class="actions">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </form>


    </main>
  </body>
</html>
