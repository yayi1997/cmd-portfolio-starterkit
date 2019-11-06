<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content blog">

  <?php snippet('intro') ?>

  <ul class="articles"<?= attr(['data-even' => $page->children()->listed()->isEven()], ' ') ?>>
    <?php foreach ($page->children()->listed()->paginate(9) as $article): ?>
    <li>
      <a href="<?= $article->url() ?>">
        <figure>
          <?= $article->images()->findBy("template", "thumbnail") ?>
        </figure>
        <h3><?= $article->title() ?></h3>
        <p><?= $article->roles() ?> </p>
        <p>Read more…</p>
      </a>
    </li>
    <?php endforeach ?>
  </ul>

</section>

<?php snippet('pagination') ?>

<?php snippet('footer') ?>
