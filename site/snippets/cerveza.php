<section id="cerveza-de-verdad" class="">
  <div class="section--grid">
    <?php if($image = $data->cover()->toFile()): ?>
    <figure class="col-3-6 row-2 photoModule">
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset('featuredPhoto') ?>"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endif ?>

    <div class="textWrap col-3-6 row-2">
      <h1><?= $data->headline() ?></h1>
      <?= $data->text1()->kirbytext() ?>
    </div>

    <?php foreach($data->gallery()->toFiles() as $image): ?>
    <figure class="col-2-6">
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset('galleryPhoto') ?>"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endforeach ?>

    <div class="textWrap col-3-6 row-2">
      <?= $data->text2()->kirbytext() ?>
    </div>

    <?php if($image = $data->cover2()->toFile()): ?>
    <figure class="col-3-6 row-2 photoModule">
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset('featuredPhoto') ?>"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endif ?>

    <?php foreach($data->gallery2()->toFiles() as $image): ?>
    <figure class="col-2-6">
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset('galleryPhoto') ?>"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endforeach ?>

  </div>

  <div class="products sealBG">

    <?php foreach($data->children()->listed() as $product): ?>
      <div class="product">
        <?php if($image = $product->image()): ?>
        <figure class="">
          <img src="<?= $image->url() ?>" alt="" />
        </figure>
        <?php endif ?>
        <h2><?= $product->name() ?></h2>
        <?= $product->description()->kirbytext() ?>
        <?= $product->stats()->hops()->kirbytext() ?>
        <?= $product->ABV()->kirbytext() ?>
        <?= $product->IBU()->kirbytext() ?>
      </div>
    <?php endforeach ?>

  </div>
</section>
