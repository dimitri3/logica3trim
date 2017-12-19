<?php

	include 'cabecalho.php';

	include 'professores.php';
	//a funcao retorna um array contendo os professores
	$lista= listaProfessores();
?>
		<div class="coluna10">.</div>

		<!-- conteudo principal -->
		<article class="coluna80">
			<h2>Professores:</h2>
			<section class="lista border parallax ">
				<ul>
<?php
	if ($_SESSION['tipo']=='admin') {
		echo "<a href='formProfessor.php'><p style='font-weight:bold'>Novo Professor</p></a><br/>";
	}

	foreach ($lista as $professor) {
		echo '<li><a href="detalhaprofessor.php?cod='.$professor['siape'].'">'.$professor["nome"].'</a> -'.$professor["email"].'</li>';
	}
?>
				</ul>
			</section>
		</article>
<?php
	include 'rodape.php';
?>
