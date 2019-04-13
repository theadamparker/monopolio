<section id="our-heritage">
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
      <h1><?= $data->headline2() ?></h1>
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

    <?php if($image = $data->cover3()->toFile()): ?>
    <figure class="col-3-6 row-2 photoModule">
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset('featuredPhoto') ?>"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endif ?>

    <div class="textWrap col-3-6 row-2">
      <h1><?= $data->headline3() ?></h1>
      <?= $data->text3()->kirbytext() ?>
    </div>

    <?php foreach($data->gallery3()->toFiles() as $image): ?>
    <figure class="col-2-6">
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset('galleryPhoto') ?>"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endforeach ?>

    <div class="textWrap col-3-6 row-2">
      <h1><?= $data->headline4() ?></h1>
      <?= $data->text4()->kirbytext() ?>
    </div>

    <?php if($image = $data->cover4()->toFile()): ?>
    <figure class="col-3-6 row-2 photoModule">
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset('featuredPhoto') ?>"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endif ?>

    <?php if($image = $data->cover5()->toFile()): ?>
    <figure class="col-3-6 row-2 photoModule">
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset('featuredPhoto') ?>"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endif ?>

    <div class="textWrap col-3-6 row-2">
      <h1><?= $data->headline5() ?></h1>
      <?= $data->text5()->kirbytext() ?>
    </div>

  </div>
</section>
