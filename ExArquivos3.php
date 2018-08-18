<!DOCTYPE html>
<html>
<head>
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
<?php 

$texto = file_get_contents ("texto.txt");;

$texto = mb_strtolower($texto);
$texto = str_replace("\n", '', $texto);
$texto = str_replace("\r", '', $texto);
$texto = str_replace('-','',$texto);
$texto = str_replace(',','',$texto);
$texto = str_replace('?','',$texto);
$texto = str_replace('.','',$texto);
$texto = str_replace('!','',$texto);
$texto = str_replace('  ',' ',$texto);


$palavras = explode(' ',$texto);

$contagem = array_count_values($palavras);

foreach($contagem as $key => $value){
	if($value == 1){
		unset($contagem[$key]);
	}
}

arsort($contagem);


?>

<h2>Palavras</h2>
<table style="width:100%">
  <tr>
	<th>Palavra</th>
    <th>Total</th>
  </tr>

	<?php foreach($contagem as $key => $value): ?>
		<tr>
			<td><?php echo $key; ?></td>
			<td><?php echo $value; ?></td>

		</tr>
	<?php endforeach; ?>	
</table>

</body>