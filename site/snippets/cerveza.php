<section id="<?= $data->sectionID() ?>" class="">
  <?php snippet('sectionheader', ['title' => $data->title()]) ?>
  <div class="section--grid">
    <?php if($image = $data->cover()->toFile()): ?>
    <figure class="featuredImage photoModule">
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset() ?>"
      sizes="<?= sizes('featuredImage') ?>"
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
      srcset="<?= $image->srcset('galleryImage') ?>"
      sizes="<?= sizes('galleryImage') ?>"
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
      sizes="<?= sizes('featuredImage') ?>"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endif ?>

    <?php foreach($data->gallery2()->toFiles() as $image): ?>
    <figure class="galleryItem">
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset('galleryImage') ?>"
      sizes="<?= sizes('galleryImage') ?>"
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
          <img
          src="<?= $image->url()?>"
          srcset="<?= $image->srcset() ?>"
          sizes="<?= sizes('productImage') ?>"
          alt="<?= $image->alt()?>"
          />
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
        </div>
      </div>
    <?php endforeach ?>

  </div>
</section>
