<?php snippet('header') ?>

<main>
  <?php snippet('intro') ?>
  <div class="row" <?= attr(['data-even' => $page->children()->listed()->isEven()], ' ') ?>>
    <?php foreach ($page->children()->listed()->paginate(9) as $project): ?>
    <div class="col-4">
      <a href="<?= $project->url() ?>">
        <figure>
          <?= $project->images()->findBy("template", "thumbnail") ?>
        </figure>
        <h3><?= $project->title() ?></h3>
        <p><?= $project->roles() ?> </p>
        <p>Read more…</p>
      </a>
    </div>
    <?php endforeach ?>
  </div>
</main>
<?php snippet('pagination') ?>
<?php snippet('footer') ?>
