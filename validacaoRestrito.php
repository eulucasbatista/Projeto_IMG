<?php
	extract($_REQUEST);
	session_start();

	if (isset($_SESSION["cpf"]) == false) {
		header("Location: index.php");
		return;
	}
?>