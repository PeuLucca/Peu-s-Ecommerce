<!DOCTYPE html>
<html lang="en">
<head>
<title>Peu's Ecommerce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">

  <script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }

</script>

</head>
<body>

<?php include("menu.php"); ?>

<div class="container-fluid mt-3">


<h3 class="display-5">Cadastrar novo produto</h3>

<form method="POST" enctype="multipart/form-data" action="cadastro_action.php">
    <input class="form-control me-3" type="text" name="NOME" placeholder="Nome do produto">
    <br>
    <input class="form-control" type="number" name="PRECO" placeholder="Preço do produto">
    <br>
    <textarea class="form-control me-3" name="DESCRICAO" placeholder="Descrição do produto" cols="90" rows="5"></textarea>
    <br><br>
    <input type="submit" class="btn btn-outline-success btn-block" value="Cadastrar">

</form>



<div>
</body>
</html>