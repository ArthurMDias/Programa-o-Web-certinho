<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pode votar? php</title>
	</head>
	<body>
		<div>
			<?php
				$dataNasc=$_POST["dataNasc"];
				sscanf($dataNasc,'%d-%d-%d',$ano,$mes,$dia);
				$dataAtual=getdate();

				$idade=$dataAtual['year'] -$ano;

				if($dataAtual['mon'] <$mes || ($dataAtual['mon']==$mes && $dataAtual['mday']<$dia)) $idade--;


				echo $idade;
			?>
		</div>
	</body>
</html>