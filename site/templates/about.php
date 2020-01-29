<!doctype html>
<html lang="en">
<?php snippet('head') ?>
<body>
  <?php snippet('header') ?>
<div class="row">
  <div class="col-12 col-lg-9">
    <?php snippet('intro') ?>
    <?= $page->text()->blocks()->html() ?>
  </div>
  <div class="col-12 col-lg-3">
    <h2>Resume</h2>
    <a href="<?= $page->files()->template('document') ?>" target="_blank">Download resumé</a>
  </div>
</div>
<?php snippet("footer") ?>
  </div>
<?php snippet('scripts') ?>
</body>
</html>
