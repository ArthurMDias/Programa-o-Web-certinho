<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>Controle de Produtos</title>
	</head>
	<body>
		<div>
			<h1>Editar Produto</h1>
			<?php
				include 'crudProduto.php';

				$codigo=$_GET["codigo"];
				$resultado=mostrarProdutoAlterar($codigo);

				if($resultado){
					while($resultadoSeparado=mysqli_fetch_assoc($resultado)){
						$descricao=$resultadoSeparado['descricao'];
						$preco=$resultadoSeparado['preco'];
					}
				}
			?>

			<form method="post" action="controleProduto.php">
				<label for="descricao">Descricao:</label>
				<input type="text" name="descricao" id="descricao" value="<?php echo $descricao;?>">

				<label for="preco">Preco: </label>
				<input type="number" step=0.01 name="preco" id="preco" value="<?php echo $preco;?>">

				<input type="hidden" name="codigo" value="<?php echo $codigo;?>">

				<input type="submit" name="opcao" value="Alterar">
				<input type="submit" name="opcao" value="Excluir">
			</form>

			<a href="mostrarProduto.php">Voltar </a>
		</div>
	</body>
</html>