<?php snippet('header') ?>

<main>
  <?php snippet('intro') ?>

  <ul class="projects"<?= attr(['data-even' => $page->children()->listed()->isEven()], ' ') ?>>
    <?php foreach ($page->children()->listed()->paginate(9) as $project): ?>
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
</main>
<?php snippet('pagination') ?>
<?php snippet('footer') ?>
