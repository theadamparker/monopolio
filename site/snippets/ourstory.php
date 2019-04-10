<section id="our-story" class="section--photoBG" style="background-image: url('<?php if($image = $data->image()): ?>
  <?= $image->url() ?>
<?php endif ?>')">
  <h1><?= $data->title() ?></h1>
  <?= $data->text()->kirbytext() ?>

</section>
