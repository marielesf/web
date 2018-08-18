<?php
	session_start();
//---------------busca produto por id ---------------------//
	if(isset($_POST['flag_nome']) && $_POST['flag_nome'] == 'true'){
		unset($_POST['flag_nome']);
		$_SESSION['prod_id'] = $_POST['prod_id'];
		$id = $_SESSION['prod_id'];
		
		$con = mysqli_connect("localhost","root","","db");
		$sql = "SELECT * FROM produtos WHERE id = '$id'"; 

		$result = mysqli_query($con, $sql) or die(mysqli_error());
		$linha = mysqli_fetch_assoc($result);

		$_SESSION['current_prod'] = $linha;
	}


//-------------------troca categoria ----------------------//	
	if(isset($_POST['flag_view']) && $_POST['flag_view'] == 'true'){
		$_SESSION['cat_id'] = $_POST['cat_id'];
		$_SESSION['busca'] = 'false';		
	}

?>