<?php
	var_dump($_POST);	// selecionar tudo (vai estar no canto superior esquerdo)

$resultado=0;

	if(isset($_POST["op"]) && count($_POST)){
		switch($_POST["op"]){
			case "som":
				$resultado = $_POST["n1"] + $_POST["n2"];
				break;
			case "sub":
				$resultado = $_POST["n1"] - $_POST["n2"];
				break;
			case "mul":
				$resultado = $_POST["n1"] * $_POST["n2"];
				break;
			case "div":
				if($_POST["n2"] == 0){
					$resultado="Não é possível dividir por zero.";
				}else{
					$resultado = $_POST["n1"] / $_POST["n2"];
				}				
				break;
		}
	}else{
		echo"não há registro";
	}
?>


<!DOCTYPE html>
<html lang = "pt-br">
	<head>		
		<meta charset="utf-8">
		<meta name="author" content="Levi Alves">
		<meta name="description" content="calculadora simples">
		<meta name="robots" content="index, nofolow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>php</title>
		<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	</head>
	<body>
		<header class="conteiner">
			<h1> CALCULADORA </h1>
		</header>

		<section class="principal conteiner">
			<form method="post">
				<fieldset class="flex">
					<div class="field">
						<label for="n1">1º Número:</label>						
						<input type="number" name="n1" id="n1" class="campo" required autofocus><br><br>
						<label for="n2">2º Número:</label>
						<input type="number" name="n2" id="n2" class="campo" required>
					</div>
					<div class="field flex">
						<button type="submit" class="btn" name="op" value="som">Somar</button>
						<button type="submit" class="btn" name="op" value="sub">Subtração</button>
						<button type="submit" class="btn" name="op" value="mul">Multiplicação</button>
						<button type="submit" class="btn" name="op" value="div">Divisão</button>
					</div>
					<div class="field">
						<?php 
							echo"<p>".$resultado."</p>";
						?>
					</div>
				</fieldset>				
			</form>
		</section>

		<div class="footer">
		</div>	
	</body>
</html>