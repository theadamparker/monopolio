  </div>

  <footer class="footer">
    <?php if($image = $page->footerlogo()->toFile()): ?>
      <h1>Test</h1>
    <img src="<?= $image->url() ?>" />
    <?php endif ?>
    <div class="footerTagline">Siempre local. Siempre fresca.</div>
    <div class="copyright">&copy;<?= date('Y') ?> La Cerveceria de San Luis LLC, USA</div>
  </footer>

  <?php snippet('scripts') ?>

</body>
</html>
