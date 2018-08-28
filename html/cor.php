<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Cor PHP</title>
		<?php
			$tamanho=$_POST["tamanho"];
				$cor=$_POST["cor"];
		?>

		<style>
			span.texto{
				font-size: <?php echo $tamanho;?>;
				color: <?php echo $cor;?>;
			}
	 	</style>

	</head>
	<body>
		<div>
			<?php
				$texto=$_POST["texto"];
				echo "<span class='texto'>$texto</span>";
			?>
		</div>
	</body>
</html>