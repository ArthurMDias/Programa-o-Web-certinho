<?php
	$conexao;

	function conectar(){
		global $conexao; // primeiro falar que é uma variável global, depois atribui-se valor
		$conexao= mysqli_connect('localhost','root','','supermercado') or die(mysqli_connect_error());  //local do banco,nome do usuário,senha,base de dados
	}

	function fechar(){
		global $conexao;
		mysqli_close($conexao);
	}

	function query($sql){
		global $conexao;
		mysqli_query($conexao,"SET CHARACTER SET utf8");
		$query = mysqli_query($conexao,$sql) or die( mysqli_query_error());

		return $query;
	}
?>