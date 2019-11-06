<?php?>

<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <?= css(['assets/css/index.css', '@auto']) ?>

</head>
<body>

  <div class="page">
    <header class="header">
        <a class="logo" href="<?= $site->url() ?>">
          <img src="<?= $site->image()->url() ?>" alt="<?= $site->image()->alt() ?>" />
          <span><?= $site->title() ?></span>
        </a>
      <nav id="menu" class="menu">
        <?php
        foreach ($site->children()->listed() as $item): ?>
        <?= $item->title()->link() ?>
        <?php endforeach ?>
        <a href="#social">Contact me</a>
      </nav>
    </header>
