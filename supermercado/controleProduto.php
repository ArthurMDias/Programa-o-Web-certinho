<?php

	include 'crudProduto.php';

	$opcao=$_POST["opcao"];

	if($opcao=="Cadastrar"){
		$descricao=$_POST["descricao"];
		$preco=$_POST["preco"];
		cadastrarProduto($descricao,$preco);

		header("Location: cadastrarProduto.php");
	}else if($opcao=="Alterar"){
		$codigo=$_POST["codigo"];
		$descricao=$_POST["descricao"];
		$preco=$_POST["preco"];
		alterarProduto($codigo,$descricao,$preco);
		header("Location:mostrarProduto.php");
	}else if($opcao=="Excluir"){
		$codigo=$_POST["codigo"];
		excluirProduto($codigo);
		header("Location: mostrarProduto.php");
	}
?>