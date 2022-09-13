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

<?php

	try {
        include("conexao.php");

		$stmt = $dbh->prepare("select * from produtos where id = ?");
    	$stmt->bindParam(1, $id);
    	$id=$_GET["id"];
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		// *********************************************
        
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$stmt = $dbh->prepare("delete from produtos where id = ?");
		$stmt->bindParam(1, $id);

		$id = $_GET["id"];


		if($stmt->execute())
			echo '<div class="success"><h2 class="display-5">Produto deletado com sucesso!</h2> <br>
			<img src="./fotos/success.gif" alt="gif fail...sad"  width="500" /></div>';;

	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/><br><a href='index.php'>voltar</a>";
		die();
	}
?>

</body>
</html>