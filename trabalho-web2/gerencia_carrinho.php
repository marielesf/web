<?php
	session_start();
//---------------------- adiciona item ----------------------//

	if(isset($_POST['flag_add_prod']) && $_POST['flag_add_prod'] == 'true'){
		unset($_POST['flag_add_prod']);
		$id = $_POST['add_id'];
		$con = mysqli_connect("localhost","root","","db");
		$sql = "SELECT * FROM produtos WHERE id = '$id'"; 

		$result = mysqli_query($con, $sql) or die(mysqli_error());
		$linhas = mysqli_num_rows($result);
		$linha = mysqli_fetch_assoc($result);
		$total = mysqli_num_rows($result);
		
		$_SESSION['carrinho'][$linha['id']] = $linha;
		$_SESSION['carrinho'][$linha['id']]['c_qtd'] = '1';
	}
//---------------------- remove item ----------------------//
	if(isset($_POST['flag_remove_prod']) && $_POST['flag_remove_prod'] == 'true'){
		unset($_POST['flag_remove_prod']);
		$item = $_POST['car_prod_id'];
		unset($_SESSION['carrinho'][$item]);
	}
	
	
//-------------------- troca quantidade --------------------//
	if(isset($_POST['flag_troca_qtd']) && $_POST['flag_troca_qtd'] == 'true'){
		unset($_POST['flag_troca_qtd']);
		$_SESSION['carrinho'][$_POST['val_op']]['c_qtd'] = $_POST['qtd_op'];
	}

?>