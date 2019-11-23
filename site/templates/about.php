<?php?>

<?php snippet('header') ?>

<main>
    <?php snippet('intro') ?>

  <div class="layout">

    <aside>
      <section>
        <h2>Resume</h2>
          <a href="<?= $page->slug() ?>/<?= $page->resume()->html() ?>" target="_blank">Download resumé</a>
      </section>
    </aside>

    <div class="text">
      <?= $page->text()->blocks()->html() ?>
    </div>

  </div>
</main>

<?php snippet('footer') ?>
