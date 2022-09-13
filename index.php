<!DOCTYPE html>
<html lang="en">
<head>
  <title>Peu's Ecommerce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include("menu.php"); ?>

<div class="container-fluid mt-2">
  <h3 class="display-5">Produtos</h3>

<?php
$uploaddir = 'fotos/';
try {

include("conexao.php");
// $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sth = $dbh->prepare('SELECT ID, NOME, PRECO, DESCRICAO FROM produtos ORDER BY id');
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);

// print_r($result);


// escrevendo cabeçalho a partir dos índices do vetor FETCH_ASSOC
echo "<div class=\"table-responsive\">";
echo "<table class=\"table table-bordered\">";
echo "<thead><tr>";
echo "<th>Nome</th><th>Preço</th><th>Descrição</th><th>Opções</th>";
echo "</tr></thead>";

// escrevendo resultado do SELECT
echo "<tbody>";
foreach($result as $row) {
    echo "<tr>";
    if(strlen($row["NOME"]) > 20){
      echo "<td><h4>Teste</h4></td>";
    }else{
      echo "<td class='nome'><h4>".$row["NOME"]."</h4></td>";
    }
    echo "<td class='preco'><h4>R$".$row["PRECO"]."</h4></td>";
    echo "<td><p>".$row["DESCRICAO"]."</p></td>";
    echo "<td><a href='excluir.php?id=".$row["ID"]."' class='btn btn-outline-danger'>Excluir</a>&nbsp;";
    echo "&nbsp;<a href='alterar.php?id=".$row["ID"]."' class='btn btn-outline-warning'>Alterar</a></td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</div>";

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/><br><a href='index.php'>voltar</a>";
    die();
}
?>


    </div>

</body>
</html>