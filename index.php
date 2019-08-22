<?php require_once('funciones.php');
$pagina = "home"; ?>
<?php require_once('_head.php');?>
<body>
  <?php require_once('_header.php');?>
  <main>
    <section class="hero">
      <h1>Pancho Blanco</h1>
      <h3>Programador Web</h3>
    </section>
    <section class="mons">
      <h3>DigitalMons</h3>
      <article>
        <i class="fal fa-spinner fa-2x fa-pulse"></i>
        <h5 class="<?php echo $clase ?>" <?php echo $estilo ?> >nombre</h5>
      </article>
    </section>
  </main>
  <?php require_once('_footer.php'); ?>
</body>
</html>