<?php
	session_start();
	unset($_SESSION);
	session_destroy();
	session_write_close();
	session_start();
	$_SESSION['logout'] = 'true';
	header("location:\paginainicial.php");
	die;
?>