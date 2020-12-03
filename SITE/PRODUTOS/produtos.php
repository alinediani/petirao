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
				<script src = "bootstrap/js/bootstrap.min.js" type="text/bootstrap"></script>
				<script src = "bootstrap/js/bootstrap.js" type = "text/bootstrap"></script>
				<link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet" type = "text/css"/>
	</head>
	
	<body style="	font-family: Century Gothic;"> 
	
            <?php
                include("../NAVBAR/navbar.php");
            ?>
			
		<div class="container-fluid col-lg-9 col-md-10 col-sm-12 col-xs-12">

		<?php
			include_once("../CARRINHO/float_button.php");
		?>
			
        <div class="container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12" align="left" style="	font-family: Century Gothic;">
					<br>
				<h1><b> &nbsp Produtos <b></h1>
				<br>
				
				<div id="produtos" class="card-deck">
                        <div class="card text-white bg-success border-light mb-3" style="border: 4px">
								<a href="..\PRODUTOS\ACESSÓRIOS\acessorios.php"><img class="card-img-top" src="img/acessorios.jpg" alt="Card image cap"></a>
							<div class="card-body">
								<h5 class="card-title"><a href="..\PRODUTOS\ACESSÓRIOS\acessorios.php" style="color:white"><b>Acessórios</b></a></h5>
								<p class="card-text">Os melhores acessórios e brinquedos para seu pet você só encontra aqui, PREÇOS IMPERDÍVEIS !!</p>
							</div>
						</div>
						<div class="card text-white bg-success border-light mb-3" style="border: 4px">
								<a href="..\PRODUTOS\MEDICAMENTOS\medicamentos.php"><img class="card-img-top" src="img/medicamentos.jpg" alt="Card image cap"></a>
							<div class="card-body">
								<h5 class="card-title"><a href="..\PRODUTOS\MEDICAMENTOS\medicamentos.php" style="color:white"><b>Medicamentos</b></a></h5>
								<p class="card-text">Os melhores medicamentos para seu pet você só encontra aqui, PREÇOS IMPERDÍVEIS !!</p>
							</div>
						</div>
						<div class="card text-white bg-success border-light mb-3" style="border: 4px">
							<a href="..\PRODUTOS\RAÇÕES\racoes.php"><img class="card-img-top" src="img/raçoes.jpg" alt="Card image cap"></a>
							<div class="card-body">
									<h5 class="card-title"><a href="..\PRODUTOS\RAÇÕES\racoes.php" style="color:white"><b>Rações</b></a></h5>
								<p class="card-text">As melhores rações para seu pet você só encontra aqui, PREÇOS IMPERDÍVEIS !!</p>
							</div>
						</div>
					</div>
					
				<br>

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
			