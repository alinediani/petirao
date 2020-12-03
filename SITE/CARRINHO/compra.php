<?php
include_once('../BD/check_session.php');
if (checksession2() == 0) {
	echo '<script> window.location.href = "../ENTRAR/entrar.php"; </script>';
}
include_once('../BD/produtos.php');
include_once('../BD/check_session.php');
if ($_POST) {
	foreach ($_POST as $chv => $vlr) { //Foreach faz uma varredura no Array e retorna seus valores ou suas chaves e valores
		if (substr($chv, 0, 4) == "prod") { //Função substr retorna um pedaço da string informada
			$id = intval(substr($chv, 4));
			include_once('../BD/carrinho.php');
			if (checksession2() == 0) { } else {
				init_prod($id, 1);
			}
		}
	}
} else { }

if ($_GET) {
	foreach ($_GET as $chv => $vlr) { //Foreach faz uma varredura no Array e retorna seus valores ou suas chaves e valores
		if (substr($chv, 0, 3) == "del") { //Função substr retorna um pedaço da string informada
			$id = intval(substr($chv, 3));
			include_once('../BD/carrinho.php');
			if (checksession2() == 0) { } else {
				del_prod($id);
			}
		}
		if (substr($chv, 0, 5) == "menos") { //Função substr retorna um pedaço da string informada
			$id = intval(substr($chv, 5));
			include_once('../BD/carrinho.php');
			if (checksession2() == 0) { } else {
				sub_prod($id);
			}
		}
		if (substr($chv, 0, 4) == "mais") { //Função substr retorna um pedaço da string informada
			$id = intval(substr($chv, 4));
			include_once('../BD/carrinho.php');
			if (checksession2() == 0) { } else {
				add_prod($id);
			}
		}
	}
}

?>
<html>

<head>
	<title> Petirão Petshop | Seu pet em boas mãos! </title>
	<meta charset="UTF-8">
	<link href="Banho_e_Tosa.css" type="text/css" rel="stylesheet" />
	<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<script>
	function continuar() {
		window.location = "../PRODUTOS/produtos.php";
	}
</script>

<body style="	font-family: Century Gothic;">

	<?php
	include("../NAVBAR/navbar.php");
	?>

	<div class="container-fluid col-lg-9 col-md-10 col-sm-12 col-xs-12">
		<br><br>
		<div class="container-fluid col-lg-8 col-md-10 col-sm-10 col-xs-10">
			<form method="GET" action="compra.php" name="comprar">

				<h3> <b> Meu carrinho </b> </h3> <br>

				<table class="table">
					<thead class="thead-light">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Produto</th>
							<th scope="col">Preço</th>
							<th scope="col">Qntd</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$frete = 9.8;
						$subtotal = 0;
						$i = 0;
						if (isset($_SESSION['carrinho'])) {
							foreach ($_SESSION['carrinho'] as $key => $value) {
								$i++;
								$prod = retornarProduto($key);
								echo '<tr> <th scope="row">' . $i . '</th>';
								echo '<td>' . $prod[0] . '</td>';
								echo '<td>' . $prod[1] . '</td>';
								echo '<td> <button name="menos' . $key . '" type="submit"> - </button> &nbsp;' . $value . ' &nbsp;<button name="mais' . $key . '" type="submit"> + </button></td>';
								echo '<td><button name="del' . $key . '" type="submit">X</button></td>';
								echo '</tr>';
								$subtotal += $prod[1] * $value;
							}
						}
						if ($i == 0) {
							$frete = 0;
						}
						?>

					</tbody>
				</table>
			</form>
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th scope="col">Subtotal</th>
						<th scope="col">Frete</th>
						<th scope="col">Total</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo "R$ " . $subtotal ?></td>
						<td><?php echo "R$ " . $frete ?></td>
						<td><?php echo "R$ " . ($subtotal + $frete) ?></td>
					</tr>
				</tbody>

				<?php
				echo '<form method="POST" action="../COMPRA/compra.php">';
				if ($subtotal != 0) {
					echo '<table align="center"> <tr align="center"> <td align="center">';
					echo '<table align="left"> <tr align="center"> <td align="center">';
					echo '<button type="submit" class="btn btn-primary">Finalizar Compra</button> </td> </tr> </table> ';
					echo '</form>';
				}
				echo '<table align="center"> <tr align="center"> <td align="center">';
				echo '<td> <button onclick="continuar()" class="btn btn-success">Continuar Comprando</button> </td>';
				echo '</tr> </table>';
				echo '</td> </tr> </table>';

				?>

		</div><br><br><br>

		<br>

	</div>



	<?php
	include("../RODAPE/rodape.php");
	?>

	</div>



</body>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>-->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"> </script>
<script>
	$('input[name="radio_pag"]').change(function() {
		if ($('input[name="radio_pag"]:checked').val() == "cartao") {
			$('.dados_cartao').show();
		} else {
			$('.dados_cartao').hide();
		}
	});

	$(document).ready(function() {

		$.getJSON('estados-cidades.json', function(data) {
			var items = [];
			var options = '<option value="">escolha um estado</option>';
			$.each(data, function(key, val) {
				options += '<option value="' + val.nome + '">' + val.nome + '</option>';
			});
			$("#estados").html(options);

			$("#estados").change(function() {

				var options_cidades = '';
				var str = "";

				$("#estados option:selected").each(function() {
					str += $(this).text();
				});

				$.each(data, function(key, val) {
					if (val.nome == str) {
						$.each(val.cidades, function(key_city, val_city) {
							options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
						});
					}
				});
				$("#cidades").html(options_cidades);

			}).change();

		});

	});
</script>

</html>