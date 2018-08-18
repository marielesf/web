<?php
	session_start();

	$con = mysqli_connect("localhost","root","","db");
	
	$login = $_GET['loginname'];
	$hashed_password = password_hash($_GET['senha'], PASSWORD_DEFAULT);
	$email = $_GET['email'];
	
	$sql_select = "SELECT login from usuario WHERE login = '$login'";
	$sql_insert = "INSERT INTO usuario (login, email, senha) VALUES('$login', '$email', '$hashed_password')";

	
	$result = mysqli_query($con, $sql_select) or die(mysqli_error());
	$linhas = mysqli_num_rows($result);

	if($linhas> 0 ){
		$_SESSION['user_status'] = "existente";
		header("location:login.php");
	}else{
		$result = mysqli_query($con, $sql_insert) or die(mysqli_error());
		$_SESSION['user_status'] = "cadastrado";
		header("location:login.php");
	}

?>