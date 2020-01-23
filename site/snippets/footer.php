  <footer>
    <div class="row border-top">
      <div class="col d-flex justify-content-center">
        <h2 id="social">Feel free to contact me</h2>
      </div>
    </div>
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
    <div class="row border-top">
      <div class="col d-flex justify-content-center">
        <a href="<?= url() ?>">&copy; <?= $site->title() ?> <?= date('Y') ?></a>
      </div>
    </div>
  </footer>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
