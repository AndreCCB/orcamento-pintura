<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div>
		<form action="index.php" method="post">
			<div>
				<input type="text" placeholder="metros parede" name="m">
			</div>
			<div>
				<input type="text" placeholder="valor" name="v">
			</div>
			<div>
				<input type="text" placeholder="rendimento por lata" name="r">
			</div>
			<div>
				<input type="submit" name="btn" value="Orcamento">
			</div>
		</form>
	</div>
	<div>
		<?php
			if(isset($_POST['btn'])){
				extract($_POST);
				$metro = $_POST['m'];
				$valor = $_POST['v'];
				$rendimento = $_POST['r'];
				if(is_numeric($metro) != '' && is_numeric($valor) != '' && is_numeric($rendimento) != ''){
					$qtd_latas = $metro / $rendimento;
					$total = $qtd_latas * $valor;
					echo $qtd_latas."<br>";
					echo $total."<br>";
				}else{
					echo "ERRO";
				}
			}
		?>
	</div>
</body>
</html>