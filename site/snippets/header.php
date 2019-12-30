<?php?>

<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

</head>
<body>

  <header class="header">
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="<?= $site->url() ?>">
        <img src="<?= $site->image()->url() ?>" width="48px" height="48px" alt="<?= $site->image()->alt() ?>" />
        <?= $site->title() ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <?php
          foreach ($site->children()->listed() as $item): ?>
          <?= $item->title()->link() ?>
          <?php endforeach ?>
          <a href="#social">Contact me</a>
        </div>
      </div>
    </nav>
  </header>

  <div class="container-fluid">
