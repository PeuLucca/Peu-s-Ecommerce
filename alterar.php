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


<h3>Alterar produto cadastrado</h3>

<?php
try {

  include("conexao.php");
  
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $dbh->prepare("select * from produtos where ID = ? " );
$stmt->bindParam(1, $id);

$id = $_GET["id"];

$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/><br><a href='index.php'>voltar</a>";
  die();
}
?>

<form method="POST" action="alterar_action.php">
  <input type="hidden" name="id" value="<?php echo $result[0]["ID"];?>">
  <input type="text" name="NOME" value="<?php echo $result[0]["NOME"];?>">
  <input type="number" name="PRECO" value="<?php echo $result[0]["PRECO"];?>">
  <textarea class="form-control me-3" name="DESCRICAO" value="<?php echo $result[0]["DESCRICAO"];?>"
   placeholder="Descrição do produto" cols="90" rows="5"><?php echo $result[0]["DESCRICAO"];?></textarea>
    <br><br>
    <input type="submit" class="btn btn-outline-success" value="Atualizar">

</form>

<div>
</body>
</html>