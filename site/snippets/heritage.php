<section id="<?= $data->sectionID() ?>">
  <?php snippet('sectionheader', ['title' => $data->title()]) ?>
  <div class="section--grid">
    <?php if($image = $data->cover()->toFile()): ?>
    <figure class="featuredImage photoModule">
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset() ?>"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endif ?>

    <div class="textModule">
      <h1><?= $data->headline1() ?></h1>
      <?= $data->text1()->kirbytext() ?>
    </div>

    <?php foreach($data->gallery()->toFiles() as $image): ?>
    <figure class="galleryItem">
      <img
      src="<?= $image->url()?>"
      srcset="<?php echo $image->resize(200)->url()?> 300w,
      <?php echo $image->resize(300)->url()?> 600w,
      <?php echo $image->resize(300)->url()?> 900w,
      <?php echo $image->resize(400)->url()?> 1200w,
      <?php echo $image->resize(500)->url()?> 1500w"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endforeach ?>

    <div class="textModule">
      <h1><?= $data->headline2() ?></h1>
      <?= $data->text2()->kirbytext() ?>
    </div>

    <?php if($image = $data->cover2()->toFile()): ?>
    <figure class="featuredImage photoModule">
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset() ?>"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endif ?>

    <?php foreach($data->gallery2()->toFiles() as $image): ?>
    <figure class="galleryItem">
      <img
      src="<?= $image->url()?>"
      srcset="<?php echo $image->resize(200)->url()?> 300w,
      <?php echo $image->resize(300)->url()?> 600w,
      <?php echo $image->resize(300)->url()?> 900w,
      <?php echo $image->resize(400)->url()?> 1200w,
      <?php echo $image->resize(500)->url()?> 1500w"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endforeach ?>

    <?php if($image = $data->cover3()->toFile()): ?>
    <figure class="featuredImage photoModule">
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset() ?>"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endif ?>

    <div class="textModule">
      <h1><?= $data->headline3() ?></h1>
      <?= $data->text3()->kirbytext() ?>
    </div>

    <?php foreach($data->gallery3()->toFiles() as $image): ?>
    <figure class="galleryItem">
      <img
      src="<?= $image->url()?>"
      srcset="<?php echo $image->resize(200)->url()?> 300w,
      <?php echo $image->resize(300)->url()?> 600w,
      <?php echo $image->resize(300)->url()?> 900w,
      <?php echo $image->resize(400)->url()?> 1200w,
      <?php echo $image->resize(500)->url()?> 1500w"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endforeach ?>

    <div class="textModule">
      <h1><?= $data->headline4() ?></h1>
      <?= $data->text4()->kirbytext() ?>
    </div>

    <?php if($image = $data->cover4()->toFile()): ?>
    <figure class="featuredImage photoModule">
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset() ?>"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endif ?>
  </div>
</section>
