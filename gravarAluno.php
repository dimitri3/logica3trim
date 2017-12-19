<?php

	include('cabecalho.php');

	print("Gravado com sucesso");

	$origem = $_FILES['foto']['tmp_name'];

	$partesNome = explode(" ", $_POST['nome']);
	$primeiroNome = $partesNome[0];
	$sobrenome = end($partesNome);

	$nomeArquivo = date('dmYHis').$primeiroNome.".".$sobrenome;

	$partesExtensao = explode(".", $_FILES['foto']['name']);
	$extensao = end($partesExtensao);

	$destino = "imagens/alunos/".$_POST['turma']."/".$nomeArquivo.".".$extensao;

	move_uploaded_file($origem, $destino);




	$dados= file("dados/alunos.csv");
	foreach ($dados as $linha) {
		$colunas = explode(",", $linha);
	}


	$matricula=($_POST['matricula']);

	$nome=($_POST['nome']);

	$turma=($_POST['turma']);

	$email=($_POST['email']);

	$foto = $destino;




	$texto = $matricula.",".$nome.",".$turma.",".$email.",".$foto;

	//abrir arquivo em modo de escrita
	$arquivo=fopen("dados/alunos.csv", "a+");

	//escrever o texto no arquivo
	fwrite($arquivo, "\n".$texto);

	//fechando o arquivo
	fclose($arquivo);

	include('rodape.php');

	//esse meta embaixo e pra redirecionar
?>
<meta http-equiv="refresh" content="2;URL=listaalunos.php">
