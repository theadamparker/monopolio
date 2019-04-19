<?php

$page = $site->page('ageverification');

?>
<div class="ageOverlay">
  <div class="ageOverlay__textWrap">
    <div class="flexRow">
    <?php if($image = $page->textPlate()->toFile()): ?>
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset() ?>"
      alt="<?= $image->alt()?>"
      />
    <?php endif ?>
    </div>
    <div class="flexRow">
      <?= $page->text1()->kirbytext() ?>
    </div>
    <div class="flexRow flex">
      <div class="ageOverlay__button" id="under21">
        No
      </div>
      <div class="ageOverlay__button" id="over21">
        Sî
      </div>
    </div>
  </div>
  <?php if($image = $page->cover()->toFile()): ?>
  <figure class="ageOverlay__photo">
    <img
    src="<?= $image->url()?>"
    srcset="<?= $image->srcset() ?>"
    alt="<?= $image->alt()?>"
    />
  </figure>
  <?php endif ?>
</div>
