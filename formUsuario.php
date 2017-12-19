<?php
  include 'cabecalho.php';
?>
<div class="coluna10">.</div>
<article class="coluna80">
  <div class='formsmargin'>
    <form  method="post" action="gravarUsuario.php" enctype="multipart/form-data">
      <label for="cod" class="labels">Código (Siape, matrícula, código)</label>
      <br/>
      <input type="text" name="cod" class="inputs">

      <br/>
      <br/>

      <label for='nome' class="labels">Nome</label>
      <br/>
      <input type="text" name="nome" class="inputs">

      <br/>
      <br/>

      <label for="login" class="labels">Login</label>
      <br/>
      <input type="text" name="login" class="inputs">

      <br/>
      <br/>

      <label for="senha" class="labels">Senha</label>
      <br/>
      <input type="password" name="senha" class="inputs">

      <br/>
      <br/>

      <label for="tipo" class="labels">Tipo de Usuário</label>
      <br/>
      <select name="tipo" class="inputs">
        <option value="aluno">aluno</option>
        <option value="professor">professor</option>
        <?php
          if ($_SESSION['tipo']=='admin') {
            echo "<option value='admin'>admin</option>";
          }
         ?>
      </select>

      <br/>
      <br/>

      <label for="foto" class="labels">Foto</label>
			<br/>
			<input type="file" name="foto" class="inputs">

      <br/>
      <br/>

      <input type="submit" name="cadastrar" value="Cadastrar" class='submit'>

    </form>
  </div>
</article>
<?php
  include 'rodape.php';
?>
