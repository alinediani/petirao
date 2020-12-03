<?php
    include_once('conexao.php');
    //Criando o objeto MySql e conectando ao BD
    $mysql = new BancodeDados();
    $mysql->conecta();

    //ajustando a instru��o select para ordenar por produto
    $query = mysqli_query($mysql->con, "select usu, senha from cliente");
?>

<?php
    if ($_POST) {
        $usu = $_POST["usu"];
        $sen = $_POST["senha"];
        $achou = false;
        while ($dados = mysqli_fetch_array($query)) {
            if ($usu == $dados['usu'] && $sen == $dados['senha']) {
                setcookie("usu", $usu, time() + 70000, "/");
                $achou = true;
                echo '<script> window.location.href = "../HOME/home.php"; </script>';
                return;
            }
        }
        echo '<script> alert("Usuário e/ou senha incorreto(s)!"); </script>';
    }
?>
