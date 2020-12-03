<?php
include_once('../BD/check_session.php');
?>
<html>

<head>
	<title> Petirão Petshop | Seu pet em boas mãos! </title>
	<meta charset="UTF-8">
	<link href="Banho_e_Tosa.css" type="text/css" rel="stylesheet" />
	<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body style="	font-family: Century Gothic;">

	<?php
	include("../NAVBAR/navbar.php");
	?>

	<div class="container-fluid col-lg-9 col-md-10 col-sm-12 col-xs-12">
	<?php
			include_once("../CARRINHO/float_button.php");
		?>

		<table>
			<tr>
				<td>

					<br>
					<h1> <b>Serviços</b> </h1> <br>
					<table cellpadding="10" align="left">
						<tr>
							<td>
								<img src="img/banho.jpg" width="350" alt="Responsive image">
							</td>
						</tr>
					</table>

					<table cellpadding="10">
						<tr>
							<td>
								<h3>Banho</h3>
								&nbsp &nbsp &nbsp Feito por profissionais qualificados e com produtos próprios para animais, são utilizadas toalhas individuais, limpas e esterilizadas para cada animal, com água em temperatura adequada. Os banhos incluem limpeza de ouvidos e corte de unhas, se necessário. <br>
								<br><br>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<table>

				<table>
					<tr>
						<td>

							<br>

							<table cellpadding="10" align="left">
								<tr>
									<td align="center">
										<img src="img/tosa.jpg" width="350" alt="Responsive image">
									</td>
								</tr>
							</table>

							<table cellpadding="10">
								<tr>
									<td>
										<h3>Tosa</h3>
										&nbsp &nbsp &nbsp Realizamos tosa geral, higiênica e própria da raça. Todas feitas por profissionais capacitados, buscando sempre garantir o conforto e bem estar do seu amiguinho. Todas as tosas incluem o banho. <br>
										&nbsp &nbsp &nbsp As tosas podem ser realizadas em cães, gatos e coelhos.
										<br>

									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<hr>
							<p> Ligue-nos para mais informações! <br>
								(11)0000-0000 <br> (11)00000-0000 </p>
							<br>
						</td>
					</tr>
					<table>

						<?php
						if (checksession2() == 0) {
							exibirbanner();
						}
						?>

						<br>

	</div>



	<?php
	include("../RODAPE/rodape.php");
	?>

	</div>



</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>