<?php
	session_start();
	unset($_SESSION['produtos_busca']);
	$texto = explode(" ",$_POST['busca_text']);
	$sql = "SELECT * FROM produtos WHERE nome LIKE ";
	
	foreach($texto as $values){
		$sql = $sql . "'%$values%' OR nome LIKE ";
	}
	$sql = $sql . "2";
	$sql = explode(" OR nome LIKE 2",$sql);

	
	
	$con = mysqli_connect("localhost","root","","db");
	 
	$result = mysqli_query($con, $sql[0]) or die(mysqli_error());
	$linha = mysqli_fetch_assoc($result);
	$linhas = mysqli_num_rows($result);

	
	do{
		$_SESSION['produtos_busca'][$linha['id']] = $linha;
	}while($linha = mysqli_fetch_assoc($result));	
	$_SESSION['busca'] = 'true';
	$_SESSION['busca_count'] = $linhas;
	
	header("location:index.php");	
	
?>
				
