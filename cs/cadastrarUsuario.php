<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>Login</title>
	</head>
	<body>
		<div>
			<h1>Cadastrar Usuário</h1>
			<form method="post" action="controleUsuario.php">
				<label for="nome">Usuário: </label>
				<input type="text" name="nome" id="nome">

				<label for="senha">Senha: </label>
				<input type="password" name="senha" id="senha">

				<input type="submit" name="opcao" value="Cadastrar Usuario">
			</form>
			<br/> <a href="paginaInicial.php" >Voltar</a>
		</div>
	</body>
</html>