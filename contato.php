<?php
//inclui o código PHP, executando-o
//Array que contem as variáveis (parametros) enviados via método GET
print_r($_GET);
/*
include("cabecalho.php");
$codigo = $_GET['cod'];
$dados = file("agenda.csv");
foreach ($dados as $linha) {
	$partes = explode(";",$linha);
	if($partes[0]==$codigo){
		$nome = $partes[1];
		$telefone = $partes[2];
		$email = $partes[3];
	}
}
	print('<h2>'.$nome.'</h2>');
	print('<p>'.$telefone.'</p>');
	print('<p>'.$email.'</p>');
include("rodape.html");
?>