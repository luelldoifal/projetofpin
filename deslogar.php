<?php
	session_start();
	unset($_SESSION['cpf']);
	unset($_SESSION['senha']);

	session_destroy();
	header("location: index.php");
?>