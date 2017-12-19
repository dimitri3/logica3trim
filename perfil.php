<?php
  include 'cabecalho.php';
  include 'usuarios.php';

  $login = $_SESSION['login'];
  $senha = $_SESSION['senha'];

  $user = buscaUser($login,$senha);
?>
  <div class="coluna10">.</div>
  <article class="coluna80">
    <section class="clicavel" id="img">
			<img src=<?=$user['foto']?>>
		</section>

		<div class="modal img escondido">
			<div class="fechar"><img src='imagens/x.png'></div>
			<img src=<?=$user['foto']?> id="imgpessoa">
		</div>

		<section class="dados">
			<p>Nome: <?=$user['nome']?></p>
			<p>Login: <?=$user['login']?></p>
			<p>Tipo de Usuário: <?=$user['tipo']?></p>
      <p><a href="foto.php">Trocar Foto</a></p>
      <p><a href="senha.php">Trocar Senha</a></p>
		</section>
  </article>
