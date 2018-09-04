<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>Controle de Produtos</title>
	</head>
	<body>
		<div>
			<h1>Mostrar Produtos</h1>
			<?php
				include 'crudProduto.php';

				$resultado=mostrarProduto();

				if($resultado){ // se existir alguma coisa dentro de resultado
					while($resultadoSeparado=mysqli_fetch_assoc($resultado) ){
						$codigo=$resultadoSeparado['codigo'];
						$descricao=$resultadoSeparado['descricao'];
						$preco=$resultadoSeparado['preco'];

						echo '<br>Descricao: ',$descricao,'<br>Preco: ',$preco,'<br>',"<a href='editarProduto.php?codigo=$codigo'>Editar</a>",'<br>';
					}
				}
			?>

			<br/><a href="menu.php">Voltar para o Menu</a>
		</div>
	</body>
</html>