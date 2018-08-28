<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Idade atual</title>
	</head>
	<body>
		<div>
			<?php
				$nome=$_POST["nome"];
				$ano=$_POST["ano"];
				$sexo=$_POST["sexo"];

				$idade=date("Y")-$ano;

				echo $nome,' é ',$sexo,' e tem ',$idade,'anos.';
			?>

			<a href="idade.html">Voltar</a>
		</div>
	</body>
</html>