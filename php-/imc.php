<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="style.css">
	<title>IMC ( Índice de Massa Corporal )</title>
</head>

<body>
	<div class="container">
		<div class="content">
		<form method="get">
			<div class="header">
                    <a href="/dashboard/index.html" class="buttonvoltar">Voltar ao Inicio</a>
                    <h1 class="tittle1">Calcule o IMC</h1>
                </div>
			<label class="tittle" for="peso">
				Peso (em kg):
			</label>
			<input class="form" type="text" name="peso" required="required">
			<input class="button" type="submit" name="Enviar">


			<?php
			$altura = 1;
			$peso = 1;
			if (isset($_POST["Enviar"])) {
				if (isset($_POST["altura"])) {
					$altura = $_POST["altura"];
				}
				if (isset($_POST["Enviar"])) {
					$peso = $_POST["peso"];
				}
				if (!is_numeric($altura)) {
					echo "O valor informado não é um número! <br>";
				} else if (!is_numeric($peso)) {
					echo "O valor informado não é um número! <br>";
				} else {
					if ($peso < 0) {
						echo "Peso Inválido! <br>";
					} else if ($altura < 0) {
						echo "Altura Inválida! <br>";
					} else {
						$altura = $altura / 100;
						$imc = $peso / $altura ** 2;

						if ($imc <= 20) {
							echo "IMC: " . number_format($imc, $decimal = 1) . "<br>";
							echo "Abaixo do peso";
						} else if ($imc > 20 && $imc <= 24.9) {
							echo "IMC: " . number_format($imc, $decimal = 1) . "<br>";
							echo "Peso Ideal";
						} else if ($imc > 24.9 && $imc <= 29.9) {
							echo "IMC: " . number_format($imc, $decimal = 1) . "<br>";
							echo "Sobrepeso";
						} else {
							echo "IMC: " . number_format($imc, $decimal = 1) . "<br>";
							echo "Obesidade";
						}
					}
				}
			}
			?>
		</form>
		</div>
	</div>
</body>
</html>