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
  <div class="row border-top">
    <div class="col-12">
      <h2 class="float-left">My work</h2>
      <a class="float-right" href="<?= url('projects'); ?>">View all projects &#8594;</a>
    </div>
    <?php foreach ($projectsPage->children()->listed()->paginate(3) as $project): ?>
    <div class="col-12 col-lg-4">
      <div class="card">
      <img src="<?= $project->images()->findBy("template", "thumbnail")->url(); ?>" class="card-img-top" alt="thumbnail" />
      <div class="card-body">
        <h4 class="card-title"><a href="<?= $project->url() ?>"><?= $project->title() ?></a></h4>
        <p class="card-text"><?= $project->roles() ?></p>
        <a href="<?= $project->url() ?>">Read more &#8594;</a>
      </div>
    </div>
    </div>
    <?php endforeach ?>
  </div>
  <?php endif ?>

</main>

<?php snippet('footer') ?>
