<?php snippet('header') ?>
<?php snippet('menu') ?>


<section class="content article">
  <article>
    <?php snippet('intro') ?>
    <p><?= $page->date()->toDate('d.m.Y') ?></p>
    <?= $page->text()->kirbytext() ?>

    <a href="<?= url('blog') ?>">Back…</a>

  </article>
</section>


<?php snippet('footer') ?>
