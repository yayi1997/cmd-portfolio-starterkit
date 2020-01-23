<!doctype html>
<html lang="en">
<?php snippet('head') ?>
<body>
  <?php snippet('header') ?>
  <div class="container">
    <main>
      <?php snippet('intro') ?>
      <div class="text">
        <?= $page->text()->kt() ?>
      </div>
    </main>
  <?php snippet("footer") ?>
  </div>
<?php snippet('scripts') ?>
</body>
</html>