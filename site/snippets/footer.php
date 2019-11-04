<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This footer snippet is reused in all templates. In fetches information from the `site.txt` content file
 * and from the `about` page.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

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
