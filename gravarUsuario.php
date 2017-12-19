<?php

	include('cabecalho.php');

	print("
	<div class='coluna10'>.</div>
		<article class='coluna80'>
			<span class='align'>
				<h2>Gravado com sucesso</h2>
			</span>
		</article>
		");

		$origem = $_FILES['foto']['tmp_name'];

		$partesNome = explode(" ", $_POST['nome']);
		$primeiroNome = $partesNome[0];
		$sobrenome = end($partesNome);

		$nomeArquivo = date('dmYHis').$primeiroNome.".".$sobrenome;

		$partesExtensao = explode(".", $_FILES['foto']['name']);
		$extensao = end($partesExtensao);

		$destino = "imagens/usuarios/".$nomeArquivo.".".$extensao;

		move_uploaded_file($origem, $destino);


	$dados= file("dados/usuarios.csv");
	foreach ($dados as $linha) {
		$colunas = explode(",", $linha);
	}


	$cod=($_POST['cod']);

	$nome=($_POST['nome']);

	$login=($_POST['login']);

	$senha=($_POST['senha']);

	$tipo=($_POST['tipo']);

	$foto = $destino;



	$texto = $cod.",".$nome.",".$login.",".$senha.",".$tipo.",".$foto.",";

	//abrir arquivo em modo de escrita
	$arquivo=fopen("dados/usuarios.csv", "a+");

	//escrever o texto no arquivo
	fwrite($arquivo, "\n".$texto);

	//fechando o arquivo
	fclose($arquivo);

	include('rodape.php');

	//esse meta embaixo e pra redirecionar
?>
<meta http-equiv="refresh" content="1;URL=index.php">
