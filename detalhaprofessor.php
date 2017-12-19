<?php
	include 'cabecalho.php';
	include 'professores.php';

//recupera o cod enviado via metodo get
	$siape=$_GET['cod'];

//chama a funcao, passando o codigo do professor
	$professor = buscaProfessor($siape);

?>
	<div class="coluna10">.</div>
	<article class="coluna80">
		<section class="clicavel" id="img">
			<img src=<?=$professor['foto']?>>
		</section>

		<div class="modal img escondido">
			<div class="fechar"><img src='imagens/x.png'></div>
			<img src=<?=$professor['foto']?> id="imgpessoa">
		</div>

		<section class="dados">
			<p>Nome: <?=$professor['nome']?></p>
			<p>Email: <?=$professor['email']?></p>
			<p>Matéria: <?=$professor['materia']?></p>
		</section>
	</article>

<?php

	include 'rodape.php';
