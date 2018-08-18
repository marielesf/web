<!DOCTYPE html>
<html>
  <head>
    <title>Lista ordenada (<ol>) com 100 itens</title>
    <meta charset="utf-8">
	<style>
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
	}
	th, td {
		padding: 5px;
		text-align: left;    
	}
	</style>
  </head>
  
<body>
<table style="width:100%">  
 <tr> 
	 <td>
		<ol>
			<?php for ($cont=0; $cont<=100; $cont++) {?>
				<li> <?php echo 'PHP E HTML';?> </li>
			<?php 
			}
			?>
		</ol>
	</td>
	<td>	
		<h2>Tabela com a tabuada do 0 ao 10 </h2>
		<table>

			<tr>
				<th>#</th>
				<?php for ($cont=0; $cont<=10; $cont++) {?>
					<th>
						<?php echo $cont;?> 
					</th>
				<?php 
				}
				?>
			</tr>
			
			<?php for ($cont=0; $cont<=10; $cont++) {?>
				<tr>
					<th><?php echo $cont;?> </th>
						<?php for ($valor=0; $valor<=10; $valor++){ ?>
							<td>
								<?php echo ($cont*$valor);?> 
							</td>
						<?php 
						}
						?>
				</tr>
			<?php 
			}
			?>  
		</table>
	</td>
<tr>
</table>
</body>
</html>


