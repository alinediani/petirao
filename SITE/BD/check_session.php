<?php

session_start();
function checksession()
{
    $logged = $_SESSION['logged'] ?? NULL;
    if (!$logged) {
        header("../ENTRAR/entrar.php");
    }
}

function checksession2()
{
    $logged = $_SESSION['logged'] ?? NULL;
    if (!$logged) {
        return 0;
    } else {
        return 1;
    }
}

function exibirbanner()
{
    echo '<div id="chamada_cadastro" class="card text-center bg-warning border-light col-lg-12 col-md-12 col-sm-12 col-xs-12" id="chamada_cad1">
            <div id ="chamada-card" class="card-body">
                <h2 class="card-title">Já possui cadastro em nosso site?! </h2>
                <img src = "img/ImgChamadaCad.jpg" width ="100%" class="card-img" style="border-radius: 20px;"> 
                <br> <br>
                <a href = "..\ENTRAR\entrar.php"><button type = "button" class = "btn btn-primary"> Entrar </button> </a>
                <a href = "..\CADASTRO\cadastro.php"> <button type = "button" class = "btn btn-success"> Cadastre-se </button> </a>
            </div>
         </div>';
}
