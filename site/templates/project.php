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
  <ul>
    <?php foreach ($projectsPage->children()->listed()->paginate(3) as $project): ?>
    <li>
      <a href="<?= $project->url() ?>">

        <figure>

          <figcaption>
            <span>
              <span class="example-name"><?= $project->title() ?></span>
            </span>
          </figcaption>
        </figure>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
  <?php endif ?>

</main>

<?php snippet('footer') ?>
