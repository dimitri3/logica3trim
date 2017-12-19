<?php
	include 'cabecalho.php';
	include 'usuarios.php';
	//capturando dados enviados por POST
	$login=$_POST['login'];
	$senha=$_POST['senha'];

	$user=buscaUser($login, $senha);
///	print_r($user);
?>
<div class="coluna10">.</div>
<article class="coluna80">
	<div class="alinhamento">

<?php
	if (isset($user['login'])) {

		//logou como administrador e acertou a senha
		echo "<h2>Olá,".$user['nome']."</h2>";

		$_SESSION['nome']=$user['nome'];
		$_SESSION['login']=$user['login'];
		$_SESSION['tipo'] = $user['tipo'];
		$_SESSION['senha'] = $user['senha'];

	}else{
		echo "Usuario não existente";
	}
?>
			</div>
		</article>
		<meta http-equiv="refresh" content="1;url=index.php">
<?php
	include 'rodape.php';
?>
