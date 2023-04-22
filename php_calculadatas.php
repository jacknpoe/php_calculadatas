<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Cálculo da diferença entre duas datas</title>
 		<link rel="stylesheet" href="php_calculadatas.css"/>
		<link rel="icon" type="image/png" href="php_calculadatas.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<?php
			header( "Content-Type: text/html; charset=ISO-8859-1", true);

			$resultado = '';
			$datainicial = date( "Y-m-d");
			$datafinal = date( "Y-m-d");

			if( isset( $_POST[ 'calcular']))
			{
				$datainicial = $_POST["datainicial"];
				$datafinal = $_POST["datafinal"];
				$diferenca = strtotime( $datafinal) - strtotime( $datainicial);
				$resultado = strval( $diferenca / 86400) . " dias";
				// mágica
			}
		?>
		<h1>Cálculo da diferença entre duas datas<br></h1>

		<form action="php_calculadatas.php" method="POST" style="border: 0px">
			<p>Data Inicial: <input type="date" name="datainicial" value="<?php echo $datainicial; ?>"></p>
			<p>Data Final: <input type="date" name="datafinal" value="<?php echo $datafinal; ?>"></p>
			<p><input type="submit" name="calcular" value="Calcular"></p>
		</form>

		<br><p>Resultado: <?php echo $resultado; ?></p><br><br>
		<p><a href="https://github.com/jacknpoe/php_calculadatas">Repositório no GitHub</a></p><br><br>
		<form action="index.html" method="POST" style="border: 0px">
			<p><input type="submit" name="voltar" value="Voltar"></p>
		</form>
	</body>
</html>