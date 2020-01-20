<?php?>

<?php snippet('header') ?>

<main>
    <?php snippet('intro') ?>

    <div class="text">
      <?= $page->text()->blocks()->html() ?>
    </div>
        <h2>Resume</h2>
          <a href="<?= $page->files()->template('document') ?>" target="_blank">Download resumé</a>
</main>

<?php snippet('footer') ?>
