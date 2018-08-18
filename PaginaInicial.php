<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8">
	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" type="text/css">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Pagina de Login</title>
</head>
<body>

    <div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>Faça o Login</strong>
					</div>
					<div class="panel-body">
						<form role="form" method="POST" action="\pagina-login.php">
							<fieldset>
								<?php
								
									if(isset($_SESSION['logout'])){
										if($_SESSION['logout'] == 'true'){
												?>
													<div class="alert alert-info alert-dismissible">
														<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
														<strong>Sucesso!</strong> Logoff feito com sucesso
													</div>
												<?php												
										}
										unset($_SESSION['logout']);
									}
									
									if(isset($_SESSION['user_status'])){
										$status = $_SESSION['user_status'];
									
										switch ($status) {
											case 'invalido':
												?>
													<div class="alert alert-danger alert-dismissible">
														<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
														<strong>Erro!</strong> Usuário ou Senha inválidos
													</div>
												<?php	
												break;
											case 'cadastrado':
												?>
													<div class="alert alert-success alert-dismissible">
														<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
														<strong>Sucesso!</strong> Cadastro completo
													</div>
												<?php
												break;
										}
									}
								?>								
								
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												<input class="form-control" placeholder="Usuário" name="loginname" type="text" required autofocus> 
											</div>	
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<input class="form-control" placeholder="Senha" name="senha" type="password" value="" required>
											</div>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-lg btn-primary btn-block" value="Login">
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="panel-footer ">
						Não possui uma conta! <a href="\cadastro.php" onClick=""> Cadastre-se aqui </a>
					</div>
                </div>
			</div>
		</div>
	</div>

</body>
</html>