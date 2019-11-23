<?php snippet('header') ?>
<?php snippet('menu') ?>


<section class="content article">
  <article>
    <?php snippet('intro') ?>
    <p><?= $page->date()->toDate('d.m.Y') ?></p>
    <?= $page->text()->blocks()->html() ?>

    <a href="<?= url('articles') ?>">Back…</a>

  </article>
</section>

<?php
if ($blogPage = page('articles')): ?>
<ul>
  <?php foreach ($blogPage->children()->listed()->paginate(3) as $article): ?>
  <li>
    <a href="<?= $article->url() ?>">

      <figure>

        <figcaption>
          <span>
            <?= $article->images()->findBy("template", "thumbnail") ?>
            <span class="example-name"><?= $article->title() ?></span>
          </span>
        </figcaption>
      </figure>
    </a>
  </li>
  <?php endforeach ?>
</ul>
<?php endif ?>

<?php snippet('footer') ?>
