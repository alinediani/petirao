<?php
$where = '';
$checked[] = array();
$checked[0] = '';
if ($_GET) {
	$achou = false;
	if (isset($_GET["dog"])) {
		$where =  $where . "(ani = 'Cachorro' ";
		$achou = true;
		$checked[0] = 'checked';
	}
	if (isset($_GET["rabbit"])) {
		if ($achou) {
			$where =  $where . "or ani = 'Coelho' ";
		} else {
			$where =  $where . "(ani = 'Coelho' ";
		}
		$achou = true;
		$checked[1] = 'checked';
	}
	if (isset($_GET["cat"])) {
		if ($achou) {
			$where =  $where . "or ani = 'Gato' ";
		} else {
			$where =  $where . "(ani = 'Gato' ";
		}
		$achou = true;
		$checked[2] = 'checked';
	}
	if (isset($_GET["fish"])) {
		if ($achou) {
			$where =  $where . "or ani = 'Peixe' ";
		} else {
			$where =  $where . "(and ani = 'Peixe' ";
		}
		$achou = true;
		$checked[3] = 'checked';
	}
}

$achou = false;
$where2 = '';
$checked1[] = array();
$checked1[0] = '';
if ($_GET) {
	if (isset($_GET["radio"])) {
		if ($_GET["radio"] == '50') {
			$where2 =  $where2 . "(val <= 50";
			$achou = true;
			$checked1[0] = 'checked';
		} else if ($_GET["radio"] == '50100') {
			if ($achou) {
				$where2 =  $where2 . "or (val > 50 and val <=100)";
			} else {
				$where2 =  $where2 . "((val > 50 and val <=100)";
			}
			$achou = true;
			$checked1[1] = 'checked';
		} else if (($_GET["radio"] == '100150')) {
			if ($achou) {
				$where2 =  $where2 . "or (val > 100 and val <=150)";
			} else {
				$where2 =  $where2 . "((val > 100 and val <=150)";
			}
			$achou = true;
			$checked1[2] = 'checked';
		} else if (($_GET["radio"] == '150200')) {
			if ($achou) {
				$where2 =  $where2 . "or (val > 50 and val <=100)";
			} else {
				$where2 =  $where2 . "((val > 150 and val <=200)";
			}
			$achou = true;
			$checked1[3] = 'checked';
		} else if (($_GET["radio"] == '200')) {
			if ($achou) {
				$where2 =  $where2 . "or val > 200";
			} else {
				$where2 =  $where2 . "(val > 200";
			}
			$achou = true;
			$checked1[4] = 'checked';
		}
	}
}

include_once('../../BD/check_session.php');
?>
<html>

<head>
	<title> Petirão Petshop | Seu pet em boas mãos! </title>
	<meta charset="UTF-8">
	<link href="Banho_e_Tosa.css" type="text/css" rel="stylesheet" />
	<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	<link rel="stylesheet" href="css/orbit-1.2.3.css">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="bootstrap/js/bootstrap.min.js" type="text/bootstrap"></script>
	<script src="bootstrap/js/bootstrap.js" type="text/bootstrap"></script>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body style="	font-family: Century Gothic;">

	<?php
	include("../../NAVBAR/navbar2.php");
	?>

	<div class="container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<?php
		include_once("../../CARRINHO/float_button2.php");
		?>
		<form method="get" action="medicamentos.php" name="filtro">
			<table align="left" style="border-right: 5px solid RoyalBlue; border-bottom: 5px solid RoyalBlue; margin-bottom:30px">
				<tr>
					<td>
						<div id="content">
							<h3> <b> Filtros </b> </h3>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<h5> Animais </h5>
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" name="dog" id="chkDog" <?php if (isset($checked[0])) echo $checked[0] ?>>
						<h7> Cachorro </h7>
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" name="rabbit" id="chkRabbit" <?php if (isset($checked[1])) echo $checked[1] ?>>
						<h7> Coelho </h7>
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" name="cat" id="chkCat" <?php if (isset($checked[2])) echo $checked[2] ?>>
						<h7> Gato </h7>
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" name="fish" id="chkFish" <?php if (isset($checked[3])) echo $checked[3] ?>>
						<h7> Peixe </h7>
					</td>
				</tr>
				<tr>
					<td>
						<br>
					</td>
				</tr>
				<tr>
					<td>
						<h5> Preço </h5>
					</td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="radio" value="50" <?php if (isset($checked1[0])) echo $checked1[0] ?>>
						<h7> Menor que R$ 50,00 </h7>
					</td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="radio" value="50100" <?php if (isset($checked1[1])) echo $checked1[1] ?>>
						<h7> De R$ 50,00 até R$ 100,00 </h7>
					</td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="radio" value="100150" <?php if (isset($checked1[2])) echo $checked1[2] ?>>
						<h7> De R$ 100,00 até R$ 150,00 </h7> &nbsp; &nbsp; &nbsp; &nbsp;
					</td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="radio" value="150200" <?php if (isset($checked1[3])) echo $checked1[3] ?>>
						<h7> De R$ 150,00 até R$ 200,00 </h7>
					</td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="radio" value="200" <?php if (isset($checked1[4])) echo $checked1[4] ?>>
						<h7> Maior que R$ 200,00 </h7>
					</td>
				</tr>
				<tr>
					<td>
						<br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" style="color:RoyalBlue" value="Aplicar">
					</td>
				</tr>
				<tr>
					<td>
						<br>
					</td>
				</tr>
			</table>
		</form>


		<table align="left" style="margin-left:50px; margin-bottom:30px">
			<tr>
				<td>
					<div id="content">
						<br>
						<h1> <b> &nbsp Medicamentos </b> </h1>
						<br>
					</div>
					<?php
					include_once('../../BD/produtos.php');
					retornarMedicamentos($where, $where2);
					?>
				</td>
			</tr>
		</table>


		<div class="container-fluid col-lg-9 col-md-10 col-sm-12 col-xs-12" align="center">
			<?php
			if (checksession2() == 0) {
				exibirbanner();
			}else{
				echo '<div id="chamada_cadastro" class="card text-center bg-warning border-light col-lg-12 col-md-12 col-sm-12 col-xs-12" id="chamada_cad1">
				
			</div>';
			}
			?>

			<br>
		</div>

	</div>



	<?php
	include("../../RODAPE/rodape.php");
	?>

	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>