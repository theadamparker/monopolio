<section id="cerveza-de-verdad" class="">
  <div class="section--grid">
    <?php if($image = $data->image()): ?>
    <figure class="col-3-6 row-2 photoModule">
      <img src="<?= $image->url() ?>" alt="" />
    </figure>
    <?php endif ?>

    <div class="textWrap col-3-6 row-2">
      <h1><?= $data->title() ?></h1>
      <?= $data->text()->kirbytext() ?>
    </div>

    <div class="col-2-6">
      PHOTO
    </div>
    <div class="col-2-6">
      PHOTO
    </div>
    <div class="col-2-6">
      PHOTO
    </div>

    <div class="textWrap col-3-6 row-2">
      <?= $data->text()->kirbytext() ?>
    </div>

    <?php if($image = $data->image()): ?>
    <figure class="col-3-6 row-2 photoModule">
      <img src="<?= $image->url() ?>" alt="" />
    </figure>
    <?php endif ?>

    <div class="col-2-6">
      PHOTO
    </div>
    <div class="col-2-6">
      PHOTO
    </div>
    <div class="col-2-6">
      PHOTO
    </div>

  </div>

  <div class="products">

    <?php foreach($data->children()->listed() as $product): ?>
      <div class="product">
        <?= $product->title() ?>
      </div>
    <?php endforeach ?>

  </div>
</section>
