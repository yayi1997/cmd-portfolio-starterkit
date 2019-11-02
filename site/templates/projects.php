<?php snippet('header') ?>

<main>
  <?php snippet('intro') ?>

  <ul class="projects"<?= attr(['data-even' => $page->children()->listed()->isEven()], ' ') ?>>
    <?php foreach ($page->children()->listed()->paginate(9) as $project): ?>
    <li>
      <a href="<?= $project->url() ?>">
        <figure>
          <?= $project->images()->findBy("template", "image") ?>
          <figcaption><?= $project->title() ?> <small><?= $project->year() ?></small></figcaption>
        </figure>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</main>
<?php snippet('pagination') ?>
<?php snippet('footer') ?>
