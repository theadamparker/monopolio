<section id="our-story" class="section--photoBG" style="background-image: url('<?php if($image = $data->image()): ?>
  <?= $image->url() ?>
<?php endif ?>')">
  <div class="textWrap textWrap--fixed">
    <h1><?= $data->headline() ?></h1>
    <?= $data->text()->kirbytext() ?>
  </div>
</section>
