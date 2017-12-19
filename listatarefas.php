<?php
  include 'cabecalho.php';
  include 'tarefas.php';

  for ($i=1; $i <4 ; $i++) {
		$tarefas=listaTarefas('1info'.$i,'data','disciplina','titulo','descricao');
			echo "<section class='lista border parallax'>
			<h2>1info".$i."</h2><ul>";
			foreach ($tarefas as $linha) {

				echo"<li><h4>".$linha['data']." - ".$linha['disciplina']." - ".$linha['titulo']."</h4> ".$linha['descricao']."</li>";
			}
			echo "</ul></section>";

	}

	include 'rodape.php';
?>
