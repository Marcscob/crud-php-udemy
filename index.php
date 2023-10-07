<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    #btn {
      padding: 5px 8px;
      font-weight: 600;
    }

    #width-container {
      width: 500px;
    }

    h3 {
      margin: 20px 0;
    }
  </style>
</head>

<body>
  <div class="container" id="width-container" style="margin-top: 40px;">
    <h3>Formulário de Cadastro</h3>
    <form action="_inserir_produto.php" method="post">
      <div class="form-group">

        <label>Nro Produto</label>
        <input type="number" class="form-control" name="nroProduto" placeholder="digite o número do produto" required autocomplete="off">

      </div>

      <div class="form-group">

        <label>Nome do Produto</label>
        <input type="text" class="form-control" name="nomeProduto" placeholder="digite o nome do produto" required autocomplete="off">

      </div>



      <div class="form-group">
        <label>Categoria</label>
        <select class="form-control" name="categoria" required>
          <option> </option>
          <option>Periféricos</option>
          <option>Hardware</option>
          <option>Software</option>
          <option>Celulares</option>
        </select>
      </div>

      <div class="form-group">

        <label>Quantidade</label>
        <input type="number" class="form-control" name="quantidade" placeholder="digite a quantidade do produto" required autocomplete="off">

      </div>

      <div class="form-group">
        <label>Fornecedor</label>
        <select class="form-control" name="fornecedor" required>
          <option> </option>
          <option>Fornecedor A</option>
          <option>Fornecedor B</option>
          <option>Fornecedor C</option>

        </select>
      </div>
      <div style="text-align: right;">
        <button type="submit" id="btn" class="btn btn-success btn-sm">Cadastrar</button>
      </div>
    </form>
  </div>







  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>