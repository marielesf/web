<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Exercício 1</title>
    <meta charset="utf-8">
  </head>
  <body>
	<?php
		
		$cont = file_get_contents ("contador.php");
		if ($cont != ""){
			$cont += 1;
		}else{
			$cont = 1;
		}	

		if(isset($_GET['excluir'])){
			$cont = -1;
			header("location: exarquivos1.php");
			
		}
		
		file_put_contents("contador.php",$cont);
	?> 
	<span>Esta Página possui <a href ="?excluir=1"><?=$cont?></a> visitas</span>
		
  </body>
</html>