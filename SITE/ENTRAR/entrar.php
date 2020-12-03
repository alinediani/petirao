<?php
	include_once('../BD/check_session.php');
	if(checksession2() == 1){
		echo '<script> window.location.href = "../HOME/home.php"; </script>';
	}
?>
<!DOCTYPE html>
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
			<div class="container-fluid col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<form class="form" method="POST" action="">
				<h3> <b> Entrar </b> </h3>  <br>
				  <div class="form-group">
					<label for="exampleInputEmail1">Usuário</label>
					<input type="text" name="usu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Seu email">
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1">Senha</label>
					<input type="password" name="senha" class="form-control" id="txtSenha" placeholder="Sua senha" required>
				  </div>
				  <div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Continuar conectado</label>
				  </div>
				  <button type="submit" class="btn btn-primary btn-block">Entrar</button>
				</form>
			</div><br><br><br>
			
			<br>
			
		</div>
		
		<div class="recebe" id="recebe"> </div>

		
		<?php
			include("../RODAPE/rodape.php");
		?>
			
		</div>
		
		
	
	</body>

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"> </script> 
    <script>
        $(function(){
            $('.form').submit(function(){
			document.getElementById("recebe").innerHTML = "";
			    
                $.ajax({
                    url:'../BD/login.php',
                    type:'POST',
                    data:$('.form').serialize(),
                    success: function (data) {
                        $('.recebe').html(data);
						document.getElementById("txtSenha").value = "";
                    }
                });
                return false;
            });
        });
	
    </script>
	
</html>
			