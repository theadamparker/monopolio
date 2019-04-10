<section id="cerveza-de-verdad">
  <h1><?= $data->title() ?></h1>
  <?= $data->text()->kirbytext() ?>

  <ul>
    <?php foreach($data->children()->listed() as $product): ?>
      <?= $product->title() ?>
    <?php endforeach ?>
  </ul>
</section>
