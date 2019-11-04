<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content blog">

  <?php snippet('intro') ?>

  <?php foreach($page->children()->listed()->flip()->paginate(9) as $article): ?>

  <article>
    <h2><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></h2>
    <p><?= $article->date()->toDate('d.m.Y') ?></p>
    <p><?= $article->text()->excerpt(300) ?></p>
    <a href="<?= $article->url() ?>">Read more…</a>
  </article>

  <?php endforeach ?>

</section>
<?php snippet('pagination') ?>

<?php snippet('footer') ?>
