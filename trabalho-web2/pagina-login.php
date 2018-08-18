<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
<?php

	$con = mysqli_connect("localhost","root","","db");
		
		
		if(isset($_POST['senha']) && isset($_POST['loginname'])){
			$senha = $_POST['senha'];
			$login = $_POST['loginname'];
		}
		
		if(isset($_SESSION['senha']) && isset($_SESSION['loginname'])){
			$senha = $_SESSION['senha'];
			$login = $_SESSION['loginname'];
		}

		
		$sql = "SELECT * FROM usuario WHERE login = '$login'"; //O teste inicial deve ser só no login

		$result = mysqli_query($con, $sql) or die(mysqli_error());
		$linhas = mysqli_num_rows($result); //Se não retornou nenhuma linha, é porque não existe ninguém com esse login
		$linha = mysqli_fetch_assoc($result); //Tenta retornar a primeira linha de qualquer forma, para testar a senha
	
	
		if ($linhas <= 0 || !password_verify($senha ,$linha['senha'])) { //Se não existia o login OU a verificação da senha falhou
			$_SESSION['user_status'] = 'invalido';
			header("location:login.php");
		}else{

		$_SESSION['loginname'] = $login;
		$_SESSION['email_atual'] = $linha['email'];
		$_SESSION['logado'] = 'true';
		$_SESSION['sessiontime'] = time()+360;
		header("location:login.php");
		}
?>


</body>
</html>

