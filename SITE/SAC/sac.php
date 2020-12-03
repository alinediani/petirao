<?php
	include_once('../BD/check_session.php');
?>
<html>
	<head>
			<title> Petirão Petshop | Seu pet em boas mãos! </title>
				<meta charset = "UTF-8">
				<link href = "Banho_e_Tosa.css" type = "text/css" rel = "stylesheet"/>
				<meta name = "viewport" content = "widht=device-widht, initial-scale=1.0">
				<link rel = "stylesheet" href = "css/orbit-1.2.3.css">
				<link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet" type = "text/css"/>
				<script src = "bootstrap/js/bootstrap.min.js" "text/bootstrap"></script>
				<script src = "bootstrap/js/bootstrap.js" type = "text/bootstrap"></script>
				<link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet" type = "text/css"/>
	</head>
	
	<body style="	font-family: Century Gothic;"> 
	
            <?php
                include("../NAVBAR/navbar.php");
            ?>
			
		<div class="container-fluid col-lg-9 col-md-10 col-sm-12 col-xs-12" align="center">
			
		<?php
			include_once("../CARRINHO/float_button.php");
		?>

				<div id = "content" align="center">
				<br>
				<h1> <b> &nbsp Serviço de Atendimento ao Consumidor (SAC) </b></h1>
				
				<table align="center">
					<tr>
						<td>
							<div id = "form">
								<form>
									<br>
									<label> Nome: </label> <br>
									<input type = "text" name = "Nome" class="form-control"/> <br> 
									<label> Email: </label> <br>
									<input type = "email" name = "Email" class="form-control"/> <br> 
									<label> Telefone: </label> <br>
									<input type = "number" name = "Telefone" class="form-control"/> <br> 
									<label> Mensagem: </label> <br>
									<textarea class="form-control"> </textarea> <br> <br>
									<center><button type = "button" class = "btn btn-success btn-block" onclick = "msg()"> Enviar </button> <br> </center>
								</form>
							</div>
						</td>
						
						<td style="vertical-align: top;">
							<div id = "img">
								<img src = "img/sacimg.png" width ="250" style="margin: 20px;border-radius: 200px;">
							</div>
						</td>
						
					</tr>
				</table>
				
			</div>
					
			
			<?php
			if(checksession2() == 0){
				exibirbanner();
			}
			?>
			
			<br>
			
		</div>
		
		
		
		<?php
			include("../RODAPE/rodape.php");
		?>
			
		</div>
		
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
	
</html>
			