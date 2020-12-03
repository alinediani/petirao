<?php
class BancodeDados {
    private $host = "localhost"; 
    private $user = "root"; 	
    private $senha = ""; 		
    private $banco = "petiraco"; 	
    public $con;
	
	function conecta(){
        $this->con = @mysqli_connect($this->host,$this->user,$this->senha, $this->banco);
        if(!$this->con){
			die ("Não foi possível efetuar a conexão com nosso servidor!");
        }
    }
	
	function fechar(){
		mysqli_close($this->con);
		return;
	}
	
	// método para executar o SELECT (consultar.php, verexclusao.php, veralteracao.php)
	function sqlquery($string){
		// executando instrução SQL
		$resultado = @mysqli_query($this->con, $string);
		if (!$resultado) {
			die('<b>Erro na execução do comando - </b> <br>' . @mysqli_error($this->con)); 
		} else {
			$num = @mysqli_num_rows($resultado);
			if ($num==0){
			echo "<b>Nenhum registro encontrado. </b> <br>";
			exit;		
			}else{
				$dados=mysqli_fetch_array($resultado);
			}
		} 
		$this->fechar(); 
		return $dados;
	}
	
	//INSERT, UPDATE e DELETE
	function sqlstring($string){
		$resultado = @mysqli_query($this->con, $string);
		if (!$resultado) {
			die('<b>Erro na execução do comando - </b> <br>' . @mysqli_error($this->con)); 
		}
		$this->fechar();
		return;
	}
 }  
?>