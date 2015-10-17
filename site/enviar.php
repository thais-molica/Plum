<?php 
$email = $_POST['email'];
$nome = $_POST['nome'];
$empresa = $_POST['empresa'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$mensagem = $_POST['mensagem'];
	
$msg = "<p><h3>Olá você recebeu do seu site da empresa: ".$empresa."</h3></p>
	<br />
<p><strong>Nome: </strong>".$nome."</p>

<p><strong>Empresa: </strong>".$empresa."</p>

<p><strong>Telefone: </strong>".$telefone."</p>

<p><strong>Celular: </strong>".$celular."</p>

<p><strong>E-mail: </strong>".$email."</p>

<p><strong>Mensagem: </strong></p><p>".$mensagem."</p>
	";

	
$para_email = 'erikpsilva@gmail.com'; // e-mail de envio
	$headers = "MIME-Version: 1.1\r\n";

	$headers .= "Content-type: text/html; charset=utf-8\r\n";

	$headers .= "Cc:erikpsilva@gmail.com\r\n"; //Com cópia
	
	$headers .= "From:erikpsilva@gmail.com\r\n"; // remetente

	$headers .= "Return-Path:erikpsilva@gmail.com\r\n"; // return-path

	$envio = @mail($para_email, "Contato do seu Site", $msg, $headers);
 
	if($envio)
	
	 echo 500;
	 
	else
	
	 echo 400;
	 
?>