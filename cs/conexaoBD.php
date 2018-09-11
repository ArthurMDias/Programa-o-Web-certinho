<?php
	$conexao;

	function conectar(){
		global $conexao;
		$conexao=mysqli_connect('localhost','root','','login')  or die  (mysqli_connect_error()); //local,usuário,senha do usuário,nome do Banco
	}

	function fechar(){
		global $conexao;
		mysqli_close($conexao);
	}

	function query($sql){ //função para executar o comando sql
		global $conexao;
		mysqli_query($conexao,"SET CHARACTER SET utf8");
		
		$query = mysqli_query($conexao,$sql)  or die (mysqli_query_error());

		return $query;
	}
?>