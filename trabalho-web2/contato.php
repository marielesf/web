<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Contato</title>
        <meta charset="utf-8">
		    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	
    </head>
    <body>
	
	
	<!-- Navigation -->
	<?php include 'navigation.php';?>
	


		
	<div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong><h2>Formulário de Contato</h2></strong>
					</div>
					<div class="panel-body">
						<form role="form" method="POST" action="contatoEmail.php">
							<fieldset>
					
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
												<input class="form-control" placeholder="Nome" name="nome" type="text" required>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<textarea name="mensagem" rows=3 cols="100" placeholder="Mensagem"></textarea>
											</div>
										</div>
										<div class="form-group">
										<div class="input-group">
										<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<input type="submit" class="btn btn-lg btn-primary btn-block" value="Enviar" />
											<input type="Reset" class="btn btn-lg btn-primary btn-block" value="Limpar" />
										</div>	
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
	
		<?php include 'footer.php';?>
		
    </body>
</html>