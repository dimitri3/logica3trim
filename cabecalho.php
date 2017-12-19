<!-- PRIMEIRAMENTE, DESCULPE POR ESSE TRABALHO RUIM QUERIA TER FEITO MAIS MAS ESTOU CANSADO DE MEXER NELE -->
<!-- DESCULPA USAR TANTO BR-->
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/geral.css">

	<link rel="icon" href="imagens/calendar.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="imagens/calendar.ico" type="image/x-icon" />

	<title>Agenda de Tarefas</title>

	<meta charset="utf-8">
</head>
<body>
	<!-- cabeçalho -->
	<header>
		<div id="gradient">
		<nav class="menu">
			<section class="logo">
				<a href="index.php">
					<img src="imagens/logo.svg" id="logo">
				</a>
			</section>
			<section class="item menu" id="submenu1">Próximas tarefas</section>
			<section class="item menu" id="submenu2">Todas Tarefas</section>
			<section class="item menu" id="submenu3">Disciplina</section>
			<section class="item menu" id="submenu4">Tarefas por data</section>
			<section class="item menu" id="submenu5">Professores</section>
			<section class="item menu" id="submenu6">Colegas</section>



			<section class="submenu1 escondido submenus">
				<a href=''>Próximas Tarefas</a>
				<br/>
				<a href="">Tarefas Correntes</a>
				<br/>
				<a href="">Tarefas Anteriores</a>
			</section>
			<section class="submenu2 escondido submenus"><a href="listatarefas.php">Tarefas</a></section>
			<section class="submenu3 escondido submenus"><a href="listadisciplinas.php">Todas Disciplinas</a></section>
			<section class="submenu4 escondido submenus"><a href="">Datas</a></section>
			<section class="submenu5 escondido submenus"><a href="listaprofessores.php">Todos Professores</a></section>
			<section class="submenu6 escondido submenus"><a href='listaalunos.php'>Colegas</a></section>
		</nav>
<div class="divider"></div>
	</header>
	<br/>
	<br/>
	<br/>
		<?php
		if (!isset($_SESSION['login'])) {
//o drop do login ta bom menos o conteudo dele
			echo "<div class='drop' id='drop1'><h3>Login</h3></div>";
		}
		?>
		<div class="divider"></div>
		<br/>
 <?php
 if (!isset($_SESSION['login'])) {
 		echo "<div class'divider'></div>
		<div id='login' class='drop1 escondido'>
 				<form method='post' action='login.php'>
					<label for='login' class='labels'>Login:</label>
					<input type='text' name='login' class='inputs'>



					<label for='senha' class='labels'>Senha:</label>
					<input type='password' name='senha' class='inputs'>



					<input type='submit' name='enviar' class='submit' value='Entrar'>
					<a href='formUsuario.php'><input type='button' value='Cadastro' class='submit'></a>
				</form>
			</div>
			<br/>
			<br/>";

 		}else{
			if ($_SESSION['tipo']=='admin') {
				echo "<div id='ola'><h3 id='perfil'>Olá Administrador ".$_SESSION['nome']."</h3></div>
				<div>
								<div id='cadastro'><a href='formUsuario.php'><h4>Cadastrar</h4></a></div>
							</div>";
				echo "<div class='logout'><a href='logout.php'><h4>Desconectar</h4></a></div>";
			}elseif ($_SESSION['tipo']=='professor' || $_SESSION['tipo']=='aluno') {
				echo "<div id='ola'><h3 id='perfil'>Olá ".$_SESSION['nome']."</h3></div>";
				echo "<span class='logout'><a href='logout.php'><h4>Desconectar</h4></a></span>";
			}
		}
?>
</div>

<div class='divider'></div>

<div class='perfil escondido'><a href="perfil.php"><h4>Perfil</h4></a></div>

	<!-- menu -->



	<!-- colunas para centralizar -->

	<!-- DROP DE REDES SOCIAIS (NAO IREI USAR POR ERROS)
	<div class="menuredes">
		<img src="imagens/x.png" id="redes">
		<div class="redes escondido">
			<a href="http://www.fabebook.com">
				<img src="imagens/x.png">
			</a>
			<a href="http://www.twitter.com">
				<img src="imagens/x.png">
			</a>
			<a href="http://www.youtube.com">
				<img src="imagens/x.png">
			</a>
		</div>
	</div>-->
