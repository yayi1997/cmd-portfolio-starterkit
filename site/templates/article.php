<?php snippet('header') ?>
<?php snippet('menu') ?>


<section class="content article">
  <article>
    <?php snippet('intro') ?>
    <p><?= $page->date()->toDate('d.m.Y') ?></p>
    <?= $page->text()->blocks()->html() ?>

    <a href="<?= url('articles') ?>">Back…</a>

  </article>
</section>

<?php
if ($blogPage = page('articles')): ?>
<h2>View more articles</h2>
<div class="row">
  <?php foreach ($blogPage->children()->listed()->paginate(3) as $article): ?>
  <div class="col-4">
    <a href="<?= $article->url() ?>">
      <figure>
        <?= $article->images()->findBy("template", "thumbnail") ?>
      </figure>
      <h3><?= $article->title() ?></h3>
      <p>Read more…</p>
    </a>
  </div>
  <?php endforeach ?>
</div>
<?php endif ?>

<?php snippet('footer') ?>
