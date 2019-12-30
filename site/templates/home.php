<?php?>

<?php snippet('header') ?>

<main>

  <div class="row">
    <div class="col-6">
      <h1><?= $page->introductiontitle() ?></h1>
      <p><?= $page->introductiontext() ?></p>
      <a href="<?= $site->page('projects') ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">View my work</a>
      <a href="<?= $site->page('about') ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">More about me</a>
    </div>
    <div class="col-6">
      <?= $page->image()->html() ?>
    </div>
  </div>
  <?php
  if ($projectsPage = page('projects')): ?>
  <h2>My work</h2>
  <a href="<?= $site->page('projects') ?>">View all projects</a>
  <div class="row">
    <?php foreach ($projectsPage->children()->listed()->paginate(3) as $project): ?>
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
  <?php endif ?>

</main>

<?php snippet('footer') ?>
