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

<div class="container-fluid mt-3">
  <h3>Sistema de busca</h3>
<?php

try {

include("conexao.php");
// $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sth = $dbh->prepare('SELECT * FROM produtos where NOME like ? ORDER BY id');
$sth->bindParam(1, $nome);
$nome = "%".$_POST["nome"]."%";
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);

echo "<div class=\"table-responsive\">";
echo "<table class=\"table table-bordered\">";
echo "<thead><tr>";
foreach($result[0] as $index=>$values) {
    echo "<th>$index</th>";
}
echo "<th></th></tr></thead>";

// escrevendo resultado do SELECT
echo "<tbody>";
foreach($result as $row) {
    echo "<tr>";
    foreach($row as $value){
        echo "<td>$value</td>";
    }
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