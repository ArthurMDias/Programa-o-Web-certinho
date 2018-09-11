<?php
	include 'conexaoBD.php';

	function cadastrarUsuario($nome,$senha){
		conectar();
		query("INSERT INTO usuario(nome,senha) values ('$nome','$senha')");
		fechar();
	}

	function buscarUsuario($nome){
		conectar();
		$resultado=query("SELECT * FROM usuario where nome='$nome'");
		fechar();
		return $resultado;
	}

?>