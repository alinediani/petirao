<?php
    if (isset($_COOKIE['usu'])) {
		unset($_COOKIE['usu']);
		setcookie('usu', '', time() - 3600, '/'); 
		header('Location: ../HOME/home.php');
	}