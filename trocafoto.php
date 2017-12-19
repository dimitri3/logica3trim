<?php
  include 'cabecalho.php';
  include 'usuarios.php';

  $login = $_SESSION['login'];
  $senha = $_SESSION['senha'];

  $user = buscaUser($login,$senha);



  $origem = $_FILES['newphoto']['tmp_name'];

  $partesNome = explode(" ", $_SESSION['nome']);
  $primeiroNome = $partesNome[0];
  $sobrenome = end($partesNome);

  $nomeArquivo = date('dmYHis').$primeiroNome.".".$sobrenome;

  $partesExtensao = explode(".", $_FILES['newphoto']['name']);
  $extensao = end($partesExtensao);

  $destino = "imagens/usuarios/".$nomeArquivo.".".$extensao;

  move_uploaded_file($origem, $destino);



  $foto = $destino;

  $arquivo=fopen("dados/usuarios.csv", "a+");

//  ftruncate($arquivo, 1);
	//escrever o texto no arquivo
	fwrite($arquivo, $foto);

	//fechando o arquivo
	fclose($arquivo);

	include('rodape.php');

?>
