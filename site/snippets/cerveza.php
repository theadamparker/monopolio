<section id="cerveza-de-verdad">
  <h1><?= $data->title() ?></h1>
  <?= $data->text()->kirbytext() ?>

  <?php if($image = $data->image()): ?>
    <img src="<?= $image->url() ?>" alt="" />
    <?= $image->url() ?>
  <?php endif ?>

  <ul>
    <?php foreach($data->children()->listed() as $product): ?>
      <?= $product->title() ?>
    <?php endforeach ?>
  </ul>
</section>
