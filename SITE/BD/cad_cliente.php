
<?php
	include_once('../VALIDACAO/validacoes.php');
	include_once('conexao.php');
	$mysql = new BancodeDados();
	$mysql->conecta();
	$idpess = "1";
	$nm = $_POST['txtNm'];
	$sobrenome = $_POST['txtSobrenome'];
	$rg = $_POST['txtRg'];
	$cpf = $_POST['txtCpf'];
	$sexo = $_POST['cboSexo'];
	$email = $_POST['txtEmail'];
	$usu = $_POST['txtUser'];
	$senha = $_POST['txtSenha'];
	$sqlinsert =  "INSERT INTO `petiraco`.`cliente` (`idpess`, `nm`, `sobrenm`, `rg`, `cpf`, `sexo`, `email`, `usu`, `senha`) 
	VALUES ('$idpess', '$nm', '$sobrenome', '$rg', '$cpf', '$sexo', '$email', '$usu', '$senha');";
	$resultado = $mysql->sqlstring($sqlinsert, "INCLUS�O");

	echo '<script>alert("Cadastro efetuado com sucesso");</script>';
	header('Location: ../ENTRAR/entrar.php');
?>


