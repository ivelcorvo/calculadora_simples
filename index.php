<?php
	var_dump($_POST);	// selecionar tudo (vai estar no canto superior esquerdo)

	$res = 0;

	if(isset($_POST['op']) && count($_POST)){
		switch($_POST['op']){
			case 'som':
				$res = $_POST['n1'] + $_POST['n2'];
				break;
			case 'sub':
				$res = $_POST['n1'] - $_POST['n2'];
				break;
			case 'mul':
				$res = $_POST['n1'] * $_POST['n2'];
				break;
			case 'div':
				if($_POST['n2'] == 0){
					echo'<p class="alerta"> Não é possível dividir por zero </p>';
				}else
					$res = $_POST['n1'] / $_POST['n2'];
				break;
			default:
				echo'Erro';
		}
	}else
		echo"Não há registro";
?>


<!DOCTYPE html>
<html lang = 'ptbr'>
	<head>
		<title>php</title>
		<link rel='stylesheet' href='_css/estilo.css'>
		<meta charset="utf-8">
	</head>
	<body>
		<div class='header'>
			<h1> CALCULADORA </h1>
		</div>

		<div class='conteiner'>
			<div class='principal'>
				<form method="post">
					<div class="fields">
						<div class="input-field">
							<input id="n1" type="number" name="n1">
							<label for="n1">número 1</label>
						</div>
						<div class="input-field">
							<input id="n2" type="number" name="n2">
							<label for="n2">número 2</label>
						</div>
						<div class="btn-field">
							<button type="submit" name="op" value="som"
									class="btn">SOMA</button>
							<button type="submit" name="op" value="sub"
									class="btn">SUBTRAÇÃO</button>
							<button type="submit" name="op" value="div"
									class="btn">DIVISÃO</button>
							<button type="submit" name="op" value="mul"
									class="btn">MULTIPLICAÇÃO</button>
						</div>
						<div class="output-field">
							Resultado: <?php echo $res ?>
						</div>
					</div>					
				</form>
			</div>
		</div>
		<div class='footer'>
		</div>	
	</body>
</html>