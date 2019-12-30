<?php snippet('header') ?>

<main class="project">
  <article>
    <?php snippet('intro') ?>
    <div class="meta">
      <?= $page->roles() ?>
      <?= $page->duration() ?>
      <?= $page->clients() ?>
      <?= $page->deliverables() ?>
    </div>
    <div class="project-text text">
      <?= $page->text()->blocks()->html() ?>

    </div>

  </article>

  <?php
  if ($projectsPage = page('projects')): ?>
  <h2>View more projects</h2>
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
