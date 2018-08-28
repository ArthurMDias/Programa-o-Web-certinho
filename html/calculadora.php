<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8" />
		<title>Calculadora</title>
	</head>
	<body>
		<div>
			<?php
				$var1=$_POST["valor1"];
				$var2=$_POST["valor2"];

				$operacao=$_POST["opcao"];
				$resultado;

				if($operacao=="+"){
					$resultado=$var1+$var2;
				}else if($operacao=="-"){
					$resultado=$var1-$var2;
				}else if($operacao=="*"){
					$resultado=$var1*$var2;
				}else if($operacao=="/"){
					$resultado=$var1/$var2;
				}

				echo $resultado;
			?>

			<a href="exercicio.html">Voltar</a>
		</div>
	</body>
</html>