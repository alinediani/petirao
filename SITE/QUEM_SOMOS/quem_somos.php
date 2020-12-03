<?php
	include_once('../BD/check_session.php');
?>
<html>
	<head>
			<title> Petirão Petshop | Seu pet em boas mãos! </title>
				<meta charset = "UTF-8">
				<link href = "Banho_e_Tosa.css" type = "text/css" rel = "stylesheet"/>
				<meta name = "viewport" content = "widht=device-widht, initial-scale=1.0">
				<link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet" type = "text/css"/>
				<script src = "bootstrap/js/bootstrap.min.js" "text/bootstrap"></script>
				<script src = "bootstrap/js/bootstrap.js" type = "text/bootstrap"></script>
	</head>
	
	<body style="	font-family: Century Gothic;"> 
	
            <?php
                include("../NAVBAR/navbar.php");
            ?>
			
		<div class="container-fluid col-lg-9 col-md-10 col-sm-12 col-xs-12">
		<?php
			include_once("../CARRINHO/float_button.php");
		?>
				<br>
				<h1> <b> &nbsp Quem Somos </b> </h1>  <br>
				<img src = "img/petshop.jpg" width ="50%" height="50%" style="border-radius: 20px;" align="left">
				<!--<img src = "img/petshop.jpg" width = "500" height = "500" align = "left"> <br>-->
				<p align = "justify"> &nbsp &nbsp &nbsp O Petirão Petshop foi criado em 2017 por um grupo de amigos apaixonados por animais que, com intuito de oferecer serviços e produtos de qualidade, 
				além de um atendimento diferenciado, criaram um estabelecimento cujo ambiente familiar e agradável proporciona um tratamento carinhoso e recheado de dedicação e 
				respeito a todo e qualquer pet, com foco total no bem estar animal. <br>
				&nbsp &nbsp &nbsp Localizado no bairro Pq. Assunção de Taboão da Serra, contamos com uma estrutura confortável e completamente dedicada ao mundo animal. Além 
				da diversidade imensa de produtos e acessório de grande utilidade aos bichinhos, o Petirão Petshop conta ainda com uma sala de banho e tosa com a segurança e os
				equipamentos necessários para as devidos serviços.<br>
				&nbsp &nbsp &nbsp Em nossa estrutura prestamos os seguintes serviços: como banho, tosa (geral, de raça e higiênica), hidratação e tintura de pelagem. Sendo que todos 
				os serviços oferecidor são realizados por profissionais qualificados e especializados. </p> <br> 
					
			
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
		
		
	
	</body>
	
</html>
			