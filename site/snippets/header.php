<header>
  <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="<?= $site->url() ?>">
          <img src="<?= $site->image()->url() ?>" width="48px" height="48px" alt="<?= $site->image()->alt() ?>" class="rounded-circle"/>
          <?= $site->title() ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <?php foreach ($site->children()->listed() as $item): ?>
            <li class="nav-item">
              <a href="<?= $item->url(); ?>" class="nav-link"><?= $item->title(); ?></a>
            </li>
            <?php endforeach ?>
            <li class="nav-item">
              <a class="nav-link" href="#social">Contact me</a>
            </li>
          </ul>
      </div>
  </nav>
</header>