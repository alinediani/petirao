<?php
include_once('conexao.php');
//Criando o objeto MySql e conectando ao BD
$mysql = new BancodeDados();
$mysql->conecta();

function retornarProduto($id){
	$mysql = new BancodeDados();
	$mysql->conecta();
	$query = mysqli_query($mysql->con, "select * from produto where id = ".$id);
	while ($dados = mysqli_fetch_array($query)) {
		$prod[0] = $dados["nm"];
		$prod[1] = $dados["val"];
	}
	return $prod;
}

function retornarAcessorios($where, $where2)
{
	$mysql = new BancodeDados();
	$mysql->conecta();
	if ($where != null and $where2 == null) {
		$query = mysqli_query($mysql->con, "select * from produto where tipo = 'A' and " . $where . ")");
	} else if ($where == null and $where2 != null) {
		$query = mysqli_query($mysql->con, "select * from produto where tipo = 'A' and " . $where2 . ")");
	} else if ($where != null and $where2 != null) {
		$query = mysqli_query($mysql->con, "select * from produto where tipo = 'A' and " . $where2 . ") and " . $where . ")");
	} else {
		$query = mysqli_query($mysql->con, "select * from produto where tipo = 'A'");
	}
	while ($dados = mysqli_fetch_array($query)) {
		if($dados["img"] != null){
			$url_foto = "../../BD/produtos/" .$dados["img"];
		}else{
			$url_foto ="../../BD/produtos/no-image.jpg";
		}
		echo '<div id="content">
			<table align="left">
				<tr>
					<td>
					<a href="#">
						<img src="' . $url_foto . '" width="200" height="200" style="border-radius: 20px; margin: 10px" align="left"></a>
					</td>
				</tr>
			</table>
				
			<table>
				<tr>
					<td>
						<div align="left">
							<br>
							<h3><b>' . $dados["nm"] . '</b></h3>
							<h4>' . $dados["ani"] . '</h4>
							<h4>' . $dados["ds"] . '</h4>
							<h3>Valor:<b> R$' . $dados["val"] . ' </b>
							<h3>
							<button type="submit" name = "prod'.$dados['id'].'" class="btn btn-primary btn-block">Comprar</button>
							<br><br><br>
						</div>
					</td>
				</tr>
			</table>
	
				
			</div>';
	}
}

function retornarMedicamentos($where, $where2)
{
	$mysql = new BancodeDados();
	$mysql->conecta();
	if ($where != null and $where2 == null) {
		$query = mysqli_query($mysql->con, "select * from produto where tipo = 'M' and " . $where . ")");
	} else if ($where == null and $where2 != null) {
		$query = mysqli_query($mysql->con, "select * from produto where tipo = 'M' and " . $where2 . ")");
	} else if ($where != null and $where2 != null) {
		$query = mysqli_query($mysql->con, "select * from produto where tipo = 'M' and " . $where2 . ") and " . $where . ")");
	} else {
		$query = mysqli_query($mysql->con, "select * from produto where tipo = 'M'");
	}
	while ($dados = mysqli_fetch_array($query)) {
		if($dados["img"] != null){
			$url_foto = "../../BD/produtos/" .$dados["img"];
		}else{
			$url_foto ="../../BD/produtos/no-image.jpg";
		}
		echo '<div id="content">
			<table align="left">
				<tr>
					<td>
					<a href="#">
						<img src="'.$url_foto.'" width="200" height="200" style="border-radius: 20px; margin: 10px" align="left"></a>
					</td>
				</tr>
			</table>
				
			<table>
				<tr>
					<td>
					<div align="left">
					<br>
					<h3><b>' . $dados["nm"] . '</b></h3>
					<h4>' . $dados["ani"] . '</h4>
					<h4>' . $dados["ds"] . '</h4>
					<h3>Valor:<b> R$' . $dados["val"] . ' </b>
					<h3>
					<br><br><br>
				</div>
					</td>
				</tr>
			</table>
	
				
			</div>';
	}
}

function retornarRacoes($where, $where2)
{
	$mysql = new BancodeDados();
	$mysql->conecta();
	if ($where != null and $where2 == null) {
		$query = mysqli_query($mysql->con, "select * from produto where tipo = 'R' and " . $where . ")");
	} else if ($where == null and $where2 != null) {
		$query = mysqli_query($mysql->con, "select * from produto where tipo = 'R' and " . $where2 . ")");
	} else if ($where != null and $where2 != null) {
		$query = mysqli_query($mysql->con, "select * from produto where tipo = 'R' and " . $where2 . ") and " . $where . ")");
	} else {
		$query = mysqli_query($mysql->con, "select * from produto where tipo = 'R'");
	}
	while ($dados = mysqli_fetch_array($query)) {
		if($dados["img"] != null){
			$url_foto = "../../BD/produtos/" .$dados["img"];
		}else{
			$url_foto ="../../BD/produtos/no-image.jpg";
		}
		echo '<div id="content">
			<table align="left">
				<tr>
					<td>
					<a href="#">
						<img src="'.$url_foto.'" width="200" height="200" style="border-radius: 20px; margin: 10px" align="left"></a>
					</td>
				</tr>
			</table>
				
			<table>
				<tr>
					<td>
					<div align="left">
					<br>
					<h3><b>' . $dados["nm"] . '</b></h3>
					<h4>' . $dados["ani"] . '</h4>
					<h4>' . $dados["ds"] . '</h4>
					<h3>Valor:<b> R$' . $dados["val"] . ' </b>
					<h3>
					<br><br><br>
				</div>
					</td>
				</tr>
			</table>
	
				
			</div>';
	}
}
