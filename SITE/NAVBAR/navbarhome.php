<?php
	include_once('../BD/check_session.php');
	if(isset($_GET['logout']) && $_GET['logout'] == 1){
		$_SESSION = array();
		session_destroy();
		echo '<script> window.location.href = "../ENTRAR/entrar.php";</script>';
	}
?>


<html>
	<head>
			<title> Petirão Petshop | Seu pet em boas mãos! </title>
				<meta charset = "UTF-8">
				<link href = "Página Principal.css" type = "text/css" rel = "stylesheet"/>
				<meta name = "viewport" content = "widht=device-widht, initial-scale=1.0">
				<link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet" type = "text/css"/>
				<link rel = "stylesheet" href = "css/orbit-1.2.3.css">
				<script src = "bootstrap/js/bootstrap.min.js" type="text/bootstrap"></script>
				<script src = "bootstrap/js/bootstrap.js" type = "text/bootstrap"></script>
				<link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet" type = "text/css"/>
				<script type = "text/javascript" src = "js/jquery-1.5.1.min.js"> </script>
				<script type = "text/javascript" src = "js/jquery.orbit-1.2.3.min.js"> </script>
				<script type = "text/javascript">
					$(window).load(function(){
						$('#featured').orbit();
					});
				</script>
	</head>
	
	<style>

		#navBar ul li a:visited {
			color:white;
		}
				
		#navBar ul li a:hover, #menu ul li .current{
			background-color:ForestGreen;
			border-radius: 10px;
		}	
		#up{
			margin-bottom:20px;
		}

	#rodape-nav {
		height: 110px;
		float: center;
		align-content: center;
		text-align : center;
	}


	</style>
	
	

			<div class = "container-fluid" id = "cabeçalho1" style = "background-color:RoyalBlue" style="font-family: Century Gothic;">
				
				<nav class = "navbar navbar-expand-xl navbar-light" style = "background-color: RoyalBlue;">
					<a class = "navbar-brand" href = "#"> <img src = "img/LogoPetirão.jpg" width = "300" height = "150"> </a>
					 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="true" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					 </button> 
					<div class = "collapse navbar-collapse" id = "navBar">

						<ul class = "navbar-nav mr-auto">
							<li class = "nav-item"> <a class = "nav-link" href = "#" style = "color:white"> &nbsp; Home &nbsp;</a> </li>
							<li class = "nav-item"> <a class = "nav-link" href = "..\PRODUTOS\produtos.php" style = "color:white">&nbsp; Produtos &nbsp;</a> </li>
							<li class = "nav-item"> <a class = "nav-link" href = "..\BANHO_E_TOSA\Banho_e_Tosa.php" style = "color:white">&nbsp; Banho e Tosa &nbsp;</a> </li>
							<li class = "nav-item"> <a class = "nav-link" href = "..\QUEM_SOMOS\quem_somos.php" style = "color:white">&nbsp; Quem Somos &nbsp;</a> </li>
							<li class = "nav-item"> <a class = "nav-link" href = "..\LOCAL\local.php" style = "color:white">&nbsp; Local &nbsp;</a> </li>
							<li class = "nav-item"> <a class = "nav-link" href = "..\SAC\sac.php" style = "color:white">&nbsp; SAC &nbsp;</a> </li>
						</ul>
						<br> <br>
						<?php 
						
							if(checksession2() == 0){
								echo '<form class="form-inline my-2 my-lg-0">
										<ul id="list-cad" class = "navbar-nav mr-auto">
												<li class = "nav-item"> <a class = "nav-link" href = "../ENTRAR/entrar.php" style = "color:gold"><b>&nbsp;Fazer Login</b></a> </li>
												<li class = "nav-item"> <a class = "nav-link" href = "../CADASTRO/cadastro.php" style = "color:gold"><b>&nbsp;Cadastre-se</b></a> </li>
											</ul>
									</form>';
							}
							else{
								include_once('../BD/conexao.php');
								//Criando o objeto MySql e conectando ao BD
								$mysql = new BancodeDados();
								$mysql-> conecta();
								$id = $_SESSION["id"];
								$query = mysqli_query($mysql->con, "select * from cliente where id = $id");
								while($dados=mysqli_fetch_array($query))
								{
									$nm = $dados['nm'];
								}
								echo ' <form class="form-inline my-2 my-lg-0"><ul id="list-cad" class = "navbar-nav mr-auto">
										<li class="nav-item dropdown" style="margin-right:20px">
											<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="glyphicon glyphicon-user" aria-hidden="true"></span><font color="white"> <b> &nbsp;'.$nm.' &nbsp;</b> </font>
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="#" style = "color:black">Meu perfil</a>
											<a class="dropdown-item" href="#" style = "color:black">Meus pedidos</a>
											<a class="dropdown-item" href="?logout=1"><font color="black">Sair</font></a>
											</div>
																						</ul> </form>';
							}
						?>
					</div>
				
				</nav>
				
			</div>
			
			<nav class = "navbar navbar-expand-lg navbar-light" id="up" style = "background-color: ForestGreen;">	</nav>
			
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
			