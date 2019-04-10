<section id="our-story">
  <h1><?= $data->title() ?></h1>
  <?= $data->text()->kirbytext() ?>
  <?php if($image = $data->image()): ?>
    <img src="<?= $image->url() ?>" alt="" />
    <?= $image->url() ?>
  <?php endif ?>
</section>
