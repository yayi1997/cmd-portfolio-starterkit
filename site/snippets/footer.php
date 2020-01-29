<footer>
  <!-- Contact -->
  <div class="row border-top">
    <div class="col d-flex justify-content-center">
        <h2 id="social">Feel free to contact me</h2>
    </div>
  </div>
  <!--Social --> 
  <div class="row">
      <div class="col d-flex justify-content-center">
        <ul class="nav">
          <?php foreach ($site->social()->toStructure() as $social): ?>
          <li class="nav-item">
            <a href="<?= $social->url() ?>" class="nav-link" target="_blank"><?= $social->platform() ?></a>
          </li>
          <?php endforeach ?>
          <li class="nav-item">
            <a class="nav-link" href="mailto:<?= $site->email() ?>" target="_blank">E-mail</a>
          </li>
        </ul>
      </div>
  </div>
  <!-- Copyright -->
  <div class="row border-top">
    <div class="col d-flex justify-content-center">
        <a href="<?= url() ?>">&copy; <?= $site->title() ?> <?= date('Y') ?></a>
    </div>
  </div>
</footer>