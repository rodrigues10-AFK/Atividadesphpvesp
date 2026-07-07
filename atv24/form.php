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

      <form class="form-card" action="./salvarproduto.php" method="post">
        <h1>Formulário</h1>

        <div class="form-row">
          <label for="name" class="form-label">Produto:</label>
          <input type="text" class="form-control" id="numero1"  name="produto1" >
        </div>

       <div class="form-row">
          <label for="name" class="form-label">Quantidade:</label>
          <input type="number" class="form-control" id="numero1"  name="produto2" >
        </div>

        <div class="form-row">
          <label for="name" class="form-label">Preço:</label>
          <input type="number" class="form-control" id="numero1"  name="produto3" >
        </div>

        <div class="actions">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </form>


    </main>
  </body>
</html>
