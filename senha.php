<?php
  include 'cabecalho.php';

 ?>

  <div class="coluna10">.</div>

  <article class="coluna80">
    <div class='formsmargin'>
    <form method="post" action="trocasenha.php">
      <label for="atual" class="labels">Senha Atual</label>
      <br/>
      <input type="password" name="atual" class="inputs">

      <br/>
      <br/>

      <label for="nova_first" class="labels">Nova Senha</label>
      <br/>
      <input type="password" name="nova_first" class="inputs">

      <br/>
      <br/>

      <label for="nova_last" class="labels">Repita Nova Senha</label>
      <br/>
      <input type="password" name="nova_last" class="inputs">

      <br/>
      <br/>
      <input type="submit" class="submit">
    </form>
      <div class='formsmargin'>
  </article>

<?php 
  include 'rodape.php';
?>
