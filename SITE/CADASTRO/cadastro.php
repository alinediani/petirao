<?php
	include_once('../BD/check_session.php');
	if(checksession2() == 1){
		echo '<script> window.location.href = "../HOME/home.php"; </script>';
	}
?>
<html>
	<head>
			<title> Petirão Petshop | Seu pet em boas mãos! </title>
				<meta charset = "UTF-8">
				<link href = "Banho_e_Tosa.css" type = "text/css" rel = "stylesheet"/>
				<meta name = "viewport" content = "widht=device-widht, initial-scale=1.0">
				<link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet" type = "text/css"/>
	</head>
	
	<body style="	font-family: Century Gothic;"> 
	
            <?php
                include("../NAVBAR/navbar.php");
            ?>
			
		<div class="container-fluid col-lg-9 col-md-10 col-sm-12 col-xs-12">
		<br><br>
			<div class="container-fluid col-lg-8 col-md-10 col-sm-10 col-xs-10">
				<form method="POST" action="../BD/cad_cliente.php">

				<h3> <b> Crie sua Conta </b> </h3>  <br>

					<div class="form-group">
				 	 <b> Informações Pessoais </b>
				  	</div>

					<div class="form-row">
					<div class="form-group col-md-4">
					  <label>Nome*:</label>
					  <input type="text" class="form-control" id="inputNome" placeholder="Seu nome" name="txtNm" required>
					</div>
				
					<div class="form-group col-md-8">
					  <label>Sobrenome*:</label>
					  <input type="text" class="form-control" id="inputSobrenome" placeholder="Seu sobrenome" name="txtSobrenome" required>
					</div>
				  </div>

				  <div class="form-row">
					<div class="form-group col-md-4">
					  <label>RG*:</label>
					  <input type="number" class="form-control" name="txtRg" id="inputCity" placeholder="ex. 00.000.000-0" required>
					</div>
					<div class="form-group col-md-4">
					  <label>CPF*:</label>
					  <input type="number" class="form-control" name="txtCpf" id="inputCity" placeholder="ex. 000.000.000-00" required>
					</div>
					<div class="form-group col-md-4">
					  <label>Sexo*:</label>
					  <select class="form-control" name="cboSexo" required>
					  	<option value = "M">Masculino</option>
					  	<option value = "F">Feminino</option>
						<option value = "O">Outro</option>
					  </select>
					</div>
				  </div>		
					
					<div class="form-group">
				  <b> Sua conta </b>
				  </div>
				
				  <div class="form-row">
				  <div class="form-group col-md-6">
					  <label for="inputState">Email*:</label>
					  <input type="email" class="form-control" name="txtEmail" id="inputAddress2" placeholder="ex. wallacedias2016@gmail.com" required>
					</div>
					<div class="form-group col-md-6">
					  <label for="inputCity">Usuário*:</label>
					  <input type="text" class="form-control" name="txtUser" id="inputCity" placeholder="ex. petirao_20" required>
					</div>
				  </div>

				  <div class="form-row">
					<div class="form-group col-md-6">
					  <label for="inputCity">Senha*:</label>
					  <input type="password" class="form-control" name="txtSenha" id="inputCity" placeholder="******" required>
					</div>
					<div class="form-group col-md-6">
					  <label for="inputState">Confirmar Senha*:</label>
					  <input type="password" class="form-control" name="txtConSenha" id="inputCity" placeholder="******" required>
					</div>
				  </div>

				  <div class="form-group">
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" id="gridCheck">
					  <label class="form-check-label" for="gridCheck">
						Desejo receber ofertas em meu email
					  </label>
					</div>
				  </div>
				  <button type="submit" class="btn btn-primary">Cadastrar</button>
				</form>
			</div><br><br><br>
			
			<br>
			
		</div>
		
		
		
		<?php
			include("../RODAPE/rodape.php");
		?>
			
		</div>
		
		
	
	</body>
	
	
</html>
			