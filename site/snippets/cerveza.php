<section id="cerveza-de-verdad" class="section--grid">
  <?php if($image = $data->image()): ?>
  <figure class="grid-3-6 photoModule">
    <img src="<?= $image->url() ?>" alt="" />
  </figure>
  <?php endif ?>

  <div class="textWrap grid-3-6">
    <h1><?= $data->title() ?></h1>
    <?= $data->text()->kirbytext() ?>
  </div>

  <div class="grid-2-6">
    PHOTO
  </div>
  <div class="grid-2-6">
    PHOTO
  </div>
  <div class="grid-2-6">
    PHOTO
  </div>


  <ul>
    <?php foreach($data->children()->listed() as $product): ?>
      <?= $product->title() ?>
    <?php endforeach ?>
  </ul>
</section>
