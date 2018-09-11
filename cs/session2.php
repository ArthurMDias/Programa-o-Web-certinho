<?php
	session_start();

	if(isset($_SESSION['nome']) and isset($_SESSION['senha'])){
		echo $_SESSION['nome'],'<br>',$_SESSION['senha'];
	}


?>