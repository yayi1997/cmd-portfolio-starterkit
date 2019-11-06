<?php?>

  </div>
  
  <footer class="footer">
    <nav class="social" id="social">
      <h3>Feel free to contact me</h3>
      <?php foreach ($site->social()->toStructure() as $social): ?>
      <a href="<?= $social->url() ?>"><?= $social->platform() ?></a>
      <?php endforeach ?>
    </nav>
    <a href="<?= url() ?>">&copy; <?= $site->title() ?> <?= date('Y') ?></a>
  </footer>

</body>
</html>
