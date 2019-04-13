<?php

$page = $site->page('ageVerification');

?>
<div class="ageOverlay">
  <div class="ageOverlay__textWrap">
    <div class="flexRow">
    <?php if($image = $page->textPlate()->toFile()): ?>
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset('featuredPhoto') ?>"
      alt="<?= $image->alt()?>"
      />
    <?php endif ?>
    </div>
    <div class="flexRow">
      <div class="ageOverlay__button" id="over21">
        I'm over 21
      </div>
      <div class="ageOverlay__button" id="under21">
        I'm under 21
      </div>
    </div>
  </div>
  <?php if($image = $page->cover()->toFile()): ?>
  <figure class="ageOverlay__photo">
    <img
    src="<?= $image->url()?>"
    srcset="<?= $image->srcset('featuredPhoto') ?>"
    alt="<?= $image->alt()?>"
    />
  </figure>
  <?php endif ?>
</div>
