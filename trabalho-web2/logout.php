<?php
	session_start();
	unset($_SESSION['loginname']);
//	session_destroy();
//	session_write_close();
	session_start();
	$_SESSION['logout'] = 'true';
	$_SESSION['logado'] = 'false';
	header("location:login.php");
	die;
?>