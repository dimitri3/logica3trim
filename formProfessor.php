<?php

	include 'cabecalho.php';
?>
<div class="coluna10">.</div>
<article class="coluna80">
	<div class='formsmargin'>
		<form method="post" action="gravarProfessor.php" enctype="multipart/form-data">

			<label for="siape" class="labels">SIAPE</label>
			<br/>
			<input type="text" name="siape" class="inputs">

			<br/>
			<br/>

			<label for="nome" class="labels">Nome</label>
			<br/>
			<input type="text" name="nome" class="inputs">

			<br/>
			<br/>

			<label for="email" class="labels">Email</label>
			<br/>
			<input type="text" name="email" class="inputs">

			<br/>
			<br/>

			<label for="foto" class="labels">Foto</label>
			<br/>
			<input type="file" name="foto" class="inputs">

			<br/>
			<br/>

			<label for="materia" class="labels">Matéria</label>
			<br/>
			<input type="text" name="materia" class="inputs">

			<br/>
			<br/>

			<input type="submit" name="gravar" value="Gravar" class="submit">

		</form>
</div>
</article>
<?php

	include 'rodape.php';

?>
