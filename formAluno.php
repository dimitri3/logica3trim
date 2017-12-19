<?php

	include 'cabecalho.php';
?>
<div class="coluna10">.</div>
<article class="coluna80">
	<div class="formsmargin">
		<form method="post" action="gravarAluno.php" enctype="multipart/form-data">

			<label for="matricula" class="labels">Matrícula</label>
			<br/>
			<input type="text" name="matricula" class="inputs">

			<br/>
			<br/>

			<label for="nome" class="labels">Nome</label>
			<br/>
			<input type="text" name="nome" class="inputs">

			<br/>
			<br/>

			<label for="turma" class="labels">Turma</label>
			<br/>
			<select name="turma" class="inputs">
				<option value="1info1">1info1</option>
				<option value="1info2">1info2</option>
				<option value="1info3">1info3</option>
			</select>

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

			<input type="submit" name="gravar" value="Gravar" class="submit">

		</form>
	</div>
</article>
<?php

	include 'rodape.php';

?>
