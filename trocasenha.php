<?php
  include 'cabecalho.php';
  include 'usuarios.php';

    $senha = $_SESSION['senha'];
?>
  <div class='coluna10'>.</div>
  <article class='coluna80'>
      <div class='formsmargin'>
<?php
  if ($_POST['atual']!=$senha) {
    echo "<h1>Senha Atual Errada</h1>";
  }elseif ($_POST['nova_last']!=$_POST['nova_first']) {
    echo "<h1>Senha atual incorreta ou as novas não coincidem</h1>";
  }else{
    $arquivo=fopen("dados/usuarios.csv", "a+");

    //ftruncate
  }

 ?>
    </div>
  </article>
  <?php
    include 'rodape.php';
  ?>
