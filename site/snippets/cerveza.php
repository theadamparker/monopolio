<section id="cerveza-de-verdad" class="">
  <div class="section--grid">
    <?php if($image = $data->cover()->toFile()): ?>
    <figure class="col-3-6 row-2 photoModule">
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset() ?>"
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
      srcset="<?php echo $image->resize(200)->url()?> 300w,
      <?php echo $image->resize(300)->url()?> 600w,
      <?php echo $image->resize(300)->url()?> 900w,
      <?php echo $image->resize(400)->url()?> 1200w,
      <?php echo $image->resize(500)->url()?> 1500w"
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
      srcset="<?= $image->srcset() ?>"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endif ?>

    <?php foreach($data->gallery2()->toFiles() as $image): ?>
    <figure class="col-2-6">
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
        <div class="productDescription">
          <?= $product->description()->kirbytext() ?>
        </div>
        <div class="beerStatsLockup">
          <svg class="separator--top" viewBox="0 0 309.12 35.03">
            <defs><style>.cls-1{fill:#c3996c;}</style></defs><g><path class="cls-1" d="M119.46,12.78H13.69s-12.6,0-12.6-7.27c0-3,1.41-4,3.43-4A2.68,2.68,0,0,1,7.3,4.29,2.45,2.45,0,0,1,4.79,6.82c0,1.77,2.74,4.45,12.17,4.45H119.15Z"/><path class="cls-1" d="M132.36,33.52H295.42s12.61,0,12.61-7.27c0-3-1.41-4-3.43-4A2.68,2.68,0,0,0,301.82,25a2.45,2.45,0,0,0,2.51,2.53c0,1.77-2.74,4.45-12.18,4.45H132.67Z"/><path class="cls-1" d="M118,11.27h8.89a6.24,6.24,0,0,1,6.23,6.23v16h-1.5v-16a4.74,4.74,0,0,0-4.73-4.73H118Z"/><rect class="cls-1" x="138.78" y="25.94" width="153.03" height="1.56"/><rect class="cls-1" x="14.05" y="6.36" width="109.48" height="1.56"/><circle class="cls-1" cx="286.73" cy="29.95" r="0.62"/><circle class="cls-1" cx="277.99" cy="29.95" r="0.62"/><circle class="cls-1" cx="269.25" cy="29.95" r="0.62"/><circle class="cls-1" cx="260.52" cy="29.95" r="0.62"/><circle class="cls-1" cx="251.78" cy="29.95" r="0.62"/><circle class="cls-1" cx="243.05" cy="29.95" r="0.62"/><circle class="cls-1" cx="234.31" cy="29.95" r="0.62"/><circle class="cls-1" cx="225.57" cy="29.95" r="0.62"/><circle class="cls-1" cx="216.84" cy="29.95" r="0.62"/><circle class="cls-1" cx="117.27" cy="9.76" r="0.62"/><circle class="cls-1" cx="104.87" cy="9.76" r="0.62"/><circle class="cls-1" cx="92.46" cy="9.76" r="0.62"/><circle class="cls-1" cx="80.05" cy="9.76" r="0.62"/><circle class="cls-1" cx="67.65" cy="9.76" r="0.62"/><circle class="cls-1" cx="55.24" cy="9.76" r="0.62"/><circle class="cls-1" cx="42.84" cy="9.76" r="0.62"/><circle class="cls-1" cx="30.43" cy="9.76" r="0.62"/><circle class="cls-1" cx="18.02" cy="9.76" r="0.62"/></g>
          </svg>
          <div class="beerStatsLockup__label">
            Hops Variety
          </div>
          <div class="beerStatsLockup__hops">
            Hallertau & Czech Saaz
          </div>
          <div class="beerStatsLockup__numberWrap">
            <div>
              <div class="beerStatsLockup__label">
                ABV
              </div>
              <div class="beerStatsLockup__number">
                5.0%
              </div>
            </div>
            <svg viewBox="0 0 10.36 41.25" class="separator--vertical">
              <defs><style>.cls-1{fill:#c3996c;}</style></defs><g><rect class="cls-1" x="4.63" y="1.01" width="1.09" height="39.23"/><rect class="cls-1" x="8" y="5.18" width="1.09" height="30.89"/><rect class="cls-1" x="1.26" y="5.18" width="1.09" height="30.89"/></g>
            </svg>
            <div>
              <div class="beerStatsLockup__label">
                IBU
              </div>
              <div class="beerStatsLockup__number">
                20
              </div>
            </div>
          </div>
          <svg class="separator--bottom" viewBox="0 0 281.48 14.93">
            <defs><style>.cls-1{fill:#c3996c;}</style></defs><title>Artboard 49</title><g><rect class="cls-1" x="14.04" y="7.47" width="251.2" height="1.56"/><path class="cls-1" d="M267.79,1.83H13.69S1.08,1.82,1.08,9.1c0,3,1.41,4,3.43,4A2.68,2.68,0,0,0,7.3,10.32,2.45,2.45,0,0,0,4.78,7.79C4.78,6,7.52,3.34,17,3.34H264.52c9.43,0,12.17,2.68,12.17,4.45a2.44,2.44,0,0,0-2.51,2.53A2.68,2.68,0,0,0,277,13.1c2,0,3.42-1,3.42-4C280.39,1.82,267.79,1.83,267.79,1.83Z"/><circle class="cls-1" cx="118.85" cy="5.69" r="0.62"/><circle class="cls-1" cx="106.44" cy="5.69" r="0.62"/><circle class="cls-1" cx="94.04" cy="5.69" r="0.62"/><circle class="cls-1" cx="81.63" cy="5.69" r="0.62"/><circle class="cls-1" cx="69.22" cy="5.69" r="0.62"/><circle class="cls-1" cx="56.82" cy="5.69" r="0.62"/><circle class="cls-1" cx="44.41" cy="5.69" r="0.62"/><circle class="cls-1" cx="32.01" cy="5.69" r="0.62"/><circle class="cls-1" cx="19.6" cy="5.69" r="0.62"/><circle class="cls-1" cx="258.15" cy="5.69" r="0.62"/><circle class="cls-1" cx="244.13" cy="5.69" r="0.62"/><circle class="cls-1" cx="230.11" cy="5.69" r="0.62"/><circle class="cls-1" cx="216.09" cy="5.69" r="0.62"/><circle class="cls-1" cx="202.07" cy="5.69" r="0.62"/><circle class="cls-1" cx="188.04" cy="5.69" r="0.62"/><circle class="cls-1" cx="174.02" cy="5.69" r="0.62"/><circle class="cls-1" cx="160" cy="5.69" r="0.62"/><circle class="cls-1" cx="145.98" cy="5.69" r="0.62"/></g>
          </svg>
        </div>

      </div>
    <?php endforeach ?>

  </div>
</section>
