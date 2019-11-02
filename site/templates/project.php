<?php snippet('header') ?>

<main class="project">
  <article>

    <header>
      <?php if ($cover = $page->images()->findBy("template", "image")): ?>
      <figure class="project-cover">
        <?= $cover ?>
        <figcaption>
          <div>
            <h1><?= $page->headline()->or($page->title()) ?></h1>
            <?php if($page->intro()->isNotEmpty()): ?>
            <div class="text">
              <?= $page->intro()->kt() ?>
            </div>
            <?php endif ?>
          </div>
        </figcaption>
      </figure>
      <?php endif ?>
    </header>

    <div class="project-text text">
      <time class="project-year"><?= $page->year() ?></time>
      <?= $page->text()->kt() ?>

      <?php if ($page->tags()->isNotEmpty()): ?>
      <p class="project-tags"># <?= $page->tags() ?></p>
      <?php endif ?>
    </div>

  </article>


  <?php
  // we always use an if-statement to check if a page exists to prevent errors
  // in case the page was deleted or renamed before we call a method like `children()` in this case
  if ($projectsPage = page('projects')): ?>
  <ul>
    <?php foreach ($projectsPage->children()->listed()->paginate(3) as $project): ?>
    <li>
      <a href="<?= $project->url() ?>">
        <figure>
          <?php
          // the `cover()` method defined in the `album.php` page model can be used
          // everywhere across the site for this type of page
          if ($cover = $project->cover()): ?>
          <?= $cover->resize(1024, 1024) ?>
          <?php endif ?>
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
