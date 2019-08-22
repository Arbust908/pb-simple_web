<?php require_once('funciones.php'); 
$pagina ="nosotros";
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('_head.php'); ?>
<body>
  <?php require_once('_header.php'); ?>
  <main>
    <section class="hero">
    <?php if(isset($_POST['nomons'])){ ?>
      <h2>noMons</h2>
      <?php foreach ($_POST['nomons'] as $key => $mon) { ?>
        <h4> <?= $mon ?></h4>
      <?php } ?>
    </section>
      <?php }?> 
    <section>
      <form action="" method="POST">
          <input type="checkbox" name="nomons[]" value="Motomon"> I have a bike<br>
          <input type="checkbox" name="nomons[]" value="Cabimon"> I have a car<br>
          <input type="checkbox" name="nomons[]" value="Cabimon"> I have a car<br>
          <input type="submit" value="Submit">
      </form>
    </section>
  </main>
<?php require_once('_footer.php'); ?>
</body>
</html>