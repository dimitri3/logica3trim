<?php
  include 'cabecalho.php';

 ?>

  <div class="coluna10">.</div>

  <article class="coluna80">
    <div class='formsmargin'>
    <form method="post" action="trocafoto.php" enctype="multipart/form-data">
      <label for="newphoto" class="labels">Nova Foto</labe>
        <br/>
        <br/>
      <input type="file" name="newphoto" class="inputs">
      <br/>
      <br/>
      <input type="submit" class="submit">
    </form>
  </div>
  </article>
<?php
  include 'rodape.php';
?>
