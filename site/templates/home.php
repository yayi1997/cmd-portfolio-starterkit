<?php?>

<?php snippet('header') ?>

<main>

<h1><?= $page->introductiontitle() ?></h1>
<p><?= $page->introductiontext() ?></p>
<?= $page->image()->html() ?>

  <?php
  if ($projectsPage = page('projects')): ?>
  <ul>
    <?php foreach ($projectsPage->children()->listed()->paginate(3) as $project): ?>
    <li>
      <a href="<?= $project->url() ?>">
        <figure>
          <?= $project->images()->findBy("template", "thumbnail") ?>
        </figure>
        <h3><?= $project->title() ?></h3>
        <p><?= $project->roles() ?> </p>
        <p>Read more…</p>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
  <?php endif ?>

</main>

<?php snippet('footer') ?>
