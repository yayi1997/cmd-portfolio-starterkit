<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content blog">

  <h1><?= $page->title()->html() ?></h1>
  <?= $page->text()->kirbytext() ?>

  <?php foreach($page->children()->listed()->flip()->paginate(9) as $article): ?>

  <article>
    <h1><?= $article->title()->html() ?></h1>
    <p><?= $article->text()->excerpt(300) ?></p>
    <a href="<?= $article->url() ?>">Read more…</a>
  </article>

  <?php endforeach ?>

</section>
<?php snippet('pagination') ?>

<?php snippet('footer') ?>
