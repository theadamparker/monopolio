<section id="our-heritage">
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
      Text
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
</section>
