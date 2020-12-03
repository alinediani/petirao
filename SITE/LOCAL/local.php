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

				<div id = "content">
				<br>
				<h1> <b> &nbsp Local </b> </h1>
					<br>
					<a target="_blank" href = "https://www.google.com.br/maps/place/Etec+de+Tabo%C3%A3o+da+Serra/@-23.604973,-46.766007,16.74z/data=!4m13!1m7!3m6!1s0x94ce54390d3d7793:0x755a1b90a81e7f4b!2sPra%C3%A7a+Miguel+Ortega,+135+-+Parque+Assuncao,+Tabo%C3%A3o+da+Serra+-+SP,+06754-160!3b1!8m2!3d-23.6052356!4d-46.7638162!3m4!1s0x94ce5439738500e1:0x18e3ca266464ea67!8m2!3d-23.6049769!4d-46.7633881"> 
					<img src = "img/local.jpg" width ="200" height="200" style="border-radius: 20px; margin: 10px" align="left"></a> 
					
					<div align="left">
					<br>
					<b> Petirão Pet Shop </b> <br>
					 Pça. Miguel Ortega, 135 <br>
					 Pq. Assunção, Taboão da Serra - SP <br>
					 05576-100 <br>
					 Telefone: (11) 0000-0000 <br>
					 E-mail: contato@petirao.com <br>
					<br><br><br>
					</div>
					
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
			