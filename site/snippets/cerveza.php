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

    <?php foreach($data->images() as $image): ?>
    <figure class="col-2-6">
      <img src="<?= $image->url() ?>" alt="">
    </figure>
    <?php endforeach ?>

    <div class="textWrap col-3-6 row-2">
      <?= $data->text2()->kirbytext() ?>
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
        <?php if($image = $product->image()): ?>
        <figure class="">
          <img src="<?= $image->url() ?>" alt="" />
        </figure>
        <?php endif ?>
        <h2><?= $product->title() ?></h2>
        <?= $product->text()->kirbytext() ?>
        <?= $product->hopVariety()->kirbytext() ?>
        <?= $product->ABV()->kirbytext() ?>
        <?= $product->IBU()->kirbytext() ?>
      </div>
    <?php endforeach ?>

  </div>
</section>
