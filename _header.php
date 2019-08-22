<header>
  <a class="comp_logo" href="/final.php">
    <article class="fa-stack fa-2x">
      <i class="fas fa-circle fa-stack-2x" style="color:White"></i>
      <i class="fas fa-adjust fa-stack-2x fa-rotate-90" style="color:Tomato"></i>
      <i class="fas fa-circle fa-stack-1x" style="color:White; font-size: 0.75em"></i>
      <i class="fas fa-circle fa-stack-1x" style="color:Black; font-size: 0.5em"></i>
      <i class="far fa-circle fa-stack-2x" style="color:Black"></i>
    </article>
  </a>
  <nav>
    <a href="/Loader"> Loader </a>
    <a href="/clase6/final.php" <?= $pagina=="home"?"selected":"";?> >Home</a>
    <a href="/clase6/nosotros.php" <?= $pagina == "nosotros" ? "selected" : ""; ?> >Nosotros</a>
    <?php if (isset($_GET['noche'])) : ?>
      <a href="/clase6/final.php?dia" title="Modo Dia"><i class="far fa-toggle-off"></i></a>
    <?php else : ?>
      <a href="/clase6/final.php?noche"title="Modo Noche"><i class="far fa-toggle-on"></i></a>
    <?php endif; ?>
  </nav>
</header>