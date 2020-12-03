<?php
include_once("../../BD/check_session.php");
if (checksession2() == 1) {
    echo '<link href="../../CARRINHO/css/btn.css" rel="stylesheet" type="text/css" />
    <div class="btnMaisBotoes">
        <div class="col-12 btnMaisBotoesBtn">
            <button class="btn btnCircular btnPrincipal" name="2">Carrinho</button>
        </div>
    </div>';

    echo '<script type="text/javascript" src="js/jquery-3.3.1.min.js"> </script>
	        <script>
                $(".btnMaisBotoesBtn button").click(function() {
                    window.location.href = "../../CARRINHO/compra.php";
                });
            </script>';
}
