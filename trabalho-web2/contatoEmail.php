<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	// Destinatário
	$para = 'eccomerce.ifrs@gmail.com';

	// Assunto do e-mail
	$assunto = "Contato através do site de WEB 2...";

	// Campos do formulário de contato
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];

	// Monta o corpo da mensagem com os campos
	$corpo = "<html><body>";
	$corpo .= "Nome: $nome <br>";
	$corpo .= "Email: $email <br>Mensagem: $mensagem";
	$corpo .= "</body></html>";

// Cabeçalho do e-mail
$email_headers = implode("\n", array("From: $nome", "Return-Path: $email", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

//Verifica se os campos estão preenchidos para enviar então o email
if (!empty($nome) && !empty($email) && !empty($mensagem)) {
	mail($para, $assunto, $corpo, $email_headers);
	$msg = "Sua mensagem foi enviada com sucesso.";
	echo "<script>alert('$msg');window.location.assign('http://localhost/trabalho-web2/contato.php');</script>";
} else {
	$msg = "Erro ao enviar a mensagem.";
	echo "<script>alert('$msg');window.location.assign('http://localhost/trabalho-web2/contato.php');</script>";
}
?>

</body>
</html>