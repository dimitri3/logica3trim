<?php
/*ini_set('display_errors', 1);
error_reporting(E_ALL);*/


	include('cabecalho.php');

	print("Gravado com sucesso");


	$origem = $_FILES['foto']['tmp_name'];

	$partesNome = explode(" ", $_POST['nome']);
	$primeiroNome = $partesNome[0];
	$sobrenome = end($partesNome);

	$nomeArquivo = date('dmYHis').$primeiroNome.".".$sobrenome;

	$partesExtensao = explode(".", $_FILES['foto']['name']);
	$extensao = end($partesExtensao);

	$destino = "imagens/professores/".$nomeArquivo.".".$extensao;

	move_uploaded_file($origem, $destino);






	$dados= file("dados/professores.csv");
	foreach ($dados as $linha) {
		$colunas = explode(",", $linha);
	}


	$siape=($_POST['siape']);

	$nome=($_POST['nome']);

	$email=($_POST['email']);


	$materia=($_POST['materia']);

	$foto = $destino;


	$texto = $siape.",".$nome.",".$email.",".$foto.",".$materia;

	//abrir arquivo em modo de escrita
	$arquivo=fopen("dados/professores.csv", "a+");

	//escrever o texto no arquivo
	fwrite($arquivo, "\n".$texto);

	//fechando o arquivo
	fclose($arquivo);

	include('rodape.php');

	//esse meta embaixo e pra redirecionar
?>
<meta http-equiv="refresh" content="2;URL=listaprofessores.php">
