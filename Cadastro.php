<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8">
	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Cadastro</title>
</head>
<body>

    <div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>Cadastro</strong>
					</div>
					<div class="panel-body">
						<form role="form" method="GET" action="\valida-cadastro.php">
							<fieldset>
								<?php
									if(isset($_SESSION['user_status'])){
										$status = $_SESSION['user_status'];
										if($status == 'existente'){
								?>
									<div class="alert alert-danger alert-dismissible">
										<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										<strong>Erro!</strong> Usuário já existente
									</div>											
								<?php		
										}
									}
								?>
								
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-envelope"></i>
												</span> 
												<input class="form-control" placeholder="Email" name="email" type="text" autofocus required>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												<input class="form-control" placeholder="Usuário" name="loginname" type="text" required>
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
											<input type="submit" class="btn btn-lg btn-primary btn-block" value="Cadastrar">
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
                </div>
			</div>
		</div>
	</div>

</body>
</html>