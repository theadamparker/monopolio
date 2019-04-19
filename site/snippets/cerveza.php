<section id="<?= $data->sectionID() ?>" class="">
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
      <h1><?= $data->headline() ?></h1>
      <?= $data->text1()->kirbytext() ?>
    </div>

    <?php foreach($data->gallery()->toFiles() as $image): ?>
    <figure class="galleryItem">
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset() ?>"
      sizes="
      @media (max-width: 600px) 300px,
      @media (max-width: 600px) and (-webkit-min-device-pixel-ratio: 2) 600px,
      @media (min-width: 600px) and (max-width: 768px) 300,
      @media (min-width: 600px) and (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) 400,
      @media (min-width: 768px) 400"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endforeach ?>

    <div class="textModule">
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
      srcset="<?= $image->srcset() ?>"
      sizes="
      @media (max-width: 600px) 300px,
      @media (max-width: 600px) and (-webkit-min-device-pixel-ratio: 2) 600px,
      @media (min-width: 600px) and (max-width: 768px) 300,
      @media (min-width: 600px) and (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) 400,
      @media (min-width: 768px) 400"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endforeach ?>

  </div>

  <div class="products">

    <?php foreach($data->children()->listed() as $product): ?>
      <div class="product">
        <?php if($image = $product->image()): ?>
        <figure class="">
          <img src="<?= $image->url() ?>" alt="" />
        </figure>
        <?php endif ?>
        <h2><?= $product->name() ?></h2>
        <div class="beerStatsLockup">
          <svg class="separator--top" viewBox="0 0 455.45 21.24">
            <g id="CONTENT"><rect x="23.38" y="6.89" width="411.61" height="2.09" style="fill:#c3996c"/><path d="M20,18.17H435.47s16.87,0,16.87-9.74c0-4.06-1.88-5.36-4.58-5.36A3.59,3.59,0,0,0,444,6.8a3.28,3.28,0,0,0,3.36,3.39c0,2.37-3.67,6-16.3,6H24.36c-12.63,0-16.3-3.59-16.3-6A3.28,3.28,0,0,0,11.42,6.8,3.58,3.58,0,0,0,7.7,3.07c-2.7,0-4.59,1.3-4.59,5.36C3.11,18.18,20,18.17,20,18.17Z" style="fill:#c3996c"/><circle cx="32.88" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="47.18" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="61.47" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="75.76" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="90.06" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="104.35" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="118.64" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="132.94" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="147.23" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="161.52" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="175.82" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="190.11" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="204.4" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="218.7" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="232.99" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="247.28" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="261.58" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="275.87" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="290.16" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="304.46" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="318.75" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="333.04" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="347.34" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="361.63" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="375.92" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="390.22" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="404.51" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="418.8" cy="13" r="0.83" style="fill:#c3996c"/></g>
          </svg>
          <div class="productDescription">
            <?= $product->description()->kirbytext() ?>
          </div>
          <svg class="separator--top" viewBox="0 0 455.45 21.24">
            <g id="CONTENT"><rect x="23.38" y="6.89" width="411.61" height="2.09" style="fill:#c3996c"/><path d="M20,18.17H435.47s16.87,0,16.87-9.74c0-4.06-1.88-5.36-4.58-5.36A3.59,3.59,0,0,0,444,6.8a3.28,3.28,0,0,0,3.36,3.39c0,2.37-3.67,6-16.3,6H24.36c-12.63,0-16.3-3.59-16.3-6A3.28,3.28,0,0,0,11.42,6.8,3.58,3.58,0,0,0,7.7,3.07c-2.7,0-4.59,1.3-4.59,5.36C3.11,18.18,20,18.17,20,18.17Z" style="fill:#c3996c"/><circle cx="32.88" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="47.18" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="61.47" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="75.76" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="90.06" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="104.35" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="118.64" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="132.94" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="147.23" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="161.52" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="175.82" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="190.11" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="204.4" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="218.7" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="232.99" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="247.28" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="261.58" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="275.87" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="290.16" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="304.46" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="318.75" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="333.04" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="347.34" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="361.63" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="375.92" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="390.22" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="404.51" cy="13" r="0.83" style="fill:#c3996c"/><circle cx="418.8" cy="13" r="0.83" style="fill:#c3996c"/></g>
          </svg>
          <div class="beerStatsLockup__numberWrap">
            <div>
              <div class="beerStatsLockup__number">
                20
              </div>
              <div class="beerStatsLockup__label">
                IBU
              </div>
            </div>
            <svg viewBox="0 0 10.36 41.25" class="separator--vertical">
              <defs><style>.cls-1{fill:#c3996c;}</style></defs><g><rect class="cls-1" x="4.63" y="1.01" width="1.09" height="39.23"/><rect class="cls-1" x="8" y="5.18" width="1.09" height="30.89"/><rect class="cls-1" x="1.26" y="5.18" width="1.09" height="30.89"/></g>
            </svg>
            <div class="beerStatsLockup__ingredients">
              <?= $product->ingredients() ?>
            </div>
            <svg viewBox="0 0 10.36 41.25" class="separator--vertical">
              <defs><style>.cls-1{fill:#c3996c;}</style></defs><g><rect class="cls-1" x="4.63" y="1.01" width="1.09" height="39.23"/><rect class="cls-1" x="8" y="5.18" width="1.09" height="30.89"/><rect class="cls-1" x="1.26" y="5.18" width="1.09" height="30.89"/></g>
            </svg>
            <div>
              <div class="beerStatsLockup__number">
                5.0%
              </div>
              <div class="beerStatsLockup__label">
                ABV
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
