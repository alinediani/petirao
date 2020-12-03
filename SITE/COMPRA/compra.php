<?php
include_once('../BD/check_session.php');
if (checksession2() == 2222) {
	echo '<script> window.location.href = "../HOME/home.php"; </script>';
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

<body style="	font-family: Century Gothic;">

	<?php
	include("../NAVBAR/navbar.php");
	?>

	<div class="container-fluid col-lg-9 col-md-10 col-sm-12 col-xs-12">
		<br><br>
		<div class="container-fluid col-lg-8 col-md-10 col-sm-10 col-xs-10">
			<form method="POST" action="../BD/cad_cliente.php" name="comprar">

				<h3> <b> Efetuar Pedido </b> </h3> <br>

				<div class="card">
					<div class="card-header">
						Seu pedido
					</div>
					<div class="card-body">
						<ul class="list-group list-group-flush">
							<li class="list-group-item">
								<table align="left">
									<tr>
										<td>
											Produto x
										</td>
									</tr>
								</table>
								<table align="right">
									<tr>
										<td>
											<font size="1">1x</font>
										</td>
										<td>

										</td>
										<td>
											<font size="2">R$19.99</font>
										</td>
									</tr>
								</table>
							</li>

							<li class="list-group-item">
								<table align="right">
									<tr>
										<td>
											<font size="2"><b>Subtotal</b></font>
										</td>
										<td>

										</td>
										<td>
											<font size="2">R$19.99</font>
										</td>
									</tr>
								</table>

							</li>

							<li class="list-group-item">
								<table align="right">
									<tr>
										<td>
											<font size="2"><b>Frete</b></font>
										</td>
										<td>

										</td>
										<td>
											<font size="2">R$5.99</font>
										</td>
									</tr>
								</table>
							</li>
							<li class="list-group-item">
								<table align="right">
									<tr>
										<td>
											<font size="2"><b>Total</b></font>
										</td>
										<td>

										</td>
										<td>
											<font size="2">R$25.98</font>
										</td>
									</tr>
								</table>
							</li>
						</ul>
					</div>
				</div>

				<div class="form-group" style="margin-top:30px">
					<b> Endereço de Entrega</b>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Estado*:</label>
						<select class="form-control" id="estados" name="cboUf" required>
						<option value=""></option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label>Cidade*:</label>
						<select class="form-control" id="cidades" name="cboCid" required>
						</select>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputCity">Bairro*:</label>
						<input type="text" class="form-control" name="txtBairro" id="inputCity" placeholder="ex. Parque To Live" required>
					</div>
					<div class="form-group col-md-6">
						<label for="inputState">Logradouro*:</label>
						<input type="text" class="form-control" name="txtLogra" id="inputCity" placeholder="ex. Avenida Petirão" required>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="inputCity">Número:</label>
						<input type="number" class="form-control" name="txtNum" id="inputCity" placeholder="ex. 126">
					</div>
					<div class="form-group col-md-3">
						<label for="inputCity">CEP*:</label>
						<input type="text" class="form-control" name="txtCep" id="inputCity" placeholder="ex. 06757-080">
					</div>
					<div class="form-group col-md-6">
						<label for="inputState">Complemento:</label>
						<input type="text" class="form-control" name="txtCompl" id="inputCity" placeholder="ex. ap. 107">
					</div>
				</div>

				<div class="form-group" style="margin-top:30px">
					<b> Forma de Pagamento </b>
				</div>

				<div class="form-row" style="margin-bottom:20px" align="center">

					<table align="left">
						<tr>
							<td> <img class="custom-control-label" src="img/visa-logo-1.png" width="60px" height="25px" style="margin-bottom:10px">
							</td>
						<tr>
							<td align="center">
								<input type="radio" id="customRadioInline2" value="cartao" name="radio_pag" checked>
							</td>
						</tr>
					</table>

					<table align="left" style="margin-left:10px">
						<tr>
							<td> <img class="custom-control-label" src="img/mastercard-logo-1.png" width="60px" height="25px" style="margin-bottom:10px">
							</td>
						<tr>
							<td align="center">
								<input type="radio" name="radio_pag" value="cartao">
							</td>
						</tr>
					</table>

					<table align="left" style="margin-left:10px">
						<tr>
							<td> <img class="custom-control-label" src="img/visae-logo-1.png" width="60px" height="25px" style="margin-bottom:10px">
							</td>
						<tr>
							<td align="center">
								<input type="radio" name="radio_pag" value="cartao">
							</td>
						</tr>
					</table>

					<table align="left" style="margin-left:10px">
						<tr>
							<td> <img class="custom-control-label" src="img/maestro-logo-1.png" width="60px" height="25px" style="margin-bottom:10px">
							</td>
						<tr>
							<td align="center">
								<input type="radio" name="radio_pag" value="cartao">
							</td>
						</tr>
					</table>

					<table align="left" style="margin-left:10px">
						<tr>
							<td> <img class="custom-control-label" src="img/elo-logo-1.png" width="60px" height="25px" style="margin-bottom:10px">
							</td>
						<tr>
							<td align="center">
								<input type="radio" name="radio_pag" value="cartao">
							</td>
						</tr>
					</table>

					<table align="left" style="margin-left:10px">
						<tr>
							<td> <img class="custom-control-label" src="img/paypal-logo-1.png" width="60px" height="25px" style="margin-bottom:10px">
							</td>
						<tr>
							<td align="center">
								<input type="radio" name="radio_pag" value="paypal">
							</td>
						</tr>
					</table>

					<table align="right" style="margin-left:10px">
						<tr>
							<td> <img class="custom-control-label" src="img/boleto-logo-1.png" width="60px" height="25px" style="margin-bottom:10px">
							</td>
						<tr>
							<td align="center">
								<input type="radio" name="radio_pag" value="boleto">
							</td>
						</tr>
					</table>

				</div>
				<div class="dados_cartao">
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Número do Cartão*:</label>
							<input type="text" class="form-control" id="inputNome" placeholder="ex. 5555 6666 7777 8884" name="txtNm" required>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Nome do Titular*:</label>
							<input type="text" class="form-control" id="inputNome" placeholder="Nome no cartão" name="txtNm" required>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-4">
							<label>Código de Segurança*:</label>
							<input type="text" class="form-control" name="txtRg" id="inputCity" placeholder="ex. 111" required>
						</div>
						<div class="form-group col-md-4">
							<label>Vencimento*:</label>
							<select class="form-control"name="cboSexo" required>
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
						</div>
						<div class="form-group col-md-4">
							<label>&nbsp;</label>
							<select class="form-control" name="cboSexo" required>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
							</select>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Efetuar Pagamento</button>

			</form>
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

	$(document).ready(function () {
		
		$.getJSON('estados-cidades.json', function (data) {
			var items = [];
			var options = '';	
			$.each(data, function (key, val) {
				options += '<option value="' + val.nome + '">' + val.nome + '</option>';
			});					
			$("#estados").html(options);				
			
			$("#estados").change(function () {				
			
				var options_cidades = '';
				var str = "";					
				
				$("#estados option:selected").each(function () {
					str += $(this).text();
				});
				
				$.each(data, function (key, val) {
					if(val.nome == str) {							
						$.each(val.cidades, function (key_city, val_city) {
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