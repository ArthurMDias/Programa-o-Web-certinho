<?php

	include 'crudUsuario.php';

	if(isset($_POST ["opcao"])){

		$opcao=$_POST["opcao"];

		if($opcao=="Cadastrar Usuario"){
			$nome=$_POST["nome"];
			$senha=sha1($_POST["senha"]);
			cadastrarUsuario($nome,$senha);
		}else if($opcao=="Entrar"){
			$nome=$_POST["nome"];
			$senha=sha1($_POST["senha"]); //criptografa a senha do usuário

			$nomeBanco="null";
			$senhaBanco="null";

			$resultado=buscarUsuario($nome); //buscamos o usuário pelo nome que ele digitou

			while($linha=mysqli_fetch_assoc($resultado)){
				$nomeBanco=$linha['nome'];
				$senhaBanco=$linha['senha'];
			}

			if($nome==$nomeBanco){
				if($senha==$senhaBanco){
					session_start();
					$_SESSION['nome']=$nome;
					header("Location: outraPagina.php");
				}else{
					echo "<script>alert('Senha Incorreta!!!');</script>";
					echo "<script>window.location='paginaInicial.php';</script>";
				}
			}else{
				echo "<script>alert ('Nome Incorreto'); </script>";
				echo "<script>window.location='paginaInicial.php';</script>";
			}
		}else if($opcao=="Sair"){

		}
	}else if(isset($_GET["opcao"])){
		$opcao=$_GET["opcao"];

		if($opcao=="Sair"){
			session_start();
			session_destroy();
			header("Location: paginaInicial.php");
		}
	}

?>