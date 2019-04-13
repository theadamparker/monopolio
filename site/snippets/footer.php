  </div>

  <footer class="footer">
    <div class="footerTagline">Siempre local. Siempre fresca.</div>
    <div class="copyright">&copy;<?= date('Y') ?> La Cerveceria de San Luis LLC, USA</div>

    <?php if ($about = page('about')): ?>
    <nav class="social">
      <?php foreach ($about->social()->toStructure() as $social): ?>
      <a href="<?= $social->url() ?>"><?= $social->platform() ?></a>
      <?php endforeach ?>
    </nav>
    <?php endif ?>
  </footer>

  <?php snippet('scripts') ?>

</body>
</html>
