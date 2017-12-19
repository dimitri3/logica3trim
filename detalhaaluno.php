<?php
	include 'cabecalho.php';
	include 'alunos.php';

//recupera o cod enviado via metodo get
	$matricula=$_GET['cod'];

//chama a funcao, passando o codigo do aluno
	$aluno = buscaAluno($matricula);

?>
	<div class="coluna10">.</div>
	<article class="coluna80">
		<section class="clicavel" id="img">
			<img src=<?=$aluno['foto']?>>
		</section>

		<div class="modal img escondido">
			<div class="fechar"><img src='imagens/x.png'></div>
			<img src=<?=$aluno['foto']?> id="imgpessoa">
		</div>

		<section class="dados">
			<p>Nome: <?=$aluno['nome']?></p>
			<p>Turma: <?=$aluno['turma']?></p>
			<p>Email: <?=$aluno['email']?></p>
		</section>
	</article>

<?php

	include 'rodape.php';

?>
