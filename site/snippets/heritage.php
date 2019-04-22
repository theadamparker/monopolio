<section id="<?= $data->sectionID() ?>">
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
      <h1><?= $data->headline1() ?></h1>
      <svg class="separator" viewBox="0 0 281.48 14.93">
        <defs><style>.cls-1{fill:#c3996c;}</style></defs><title>Artboard 49</title><g><rect class="cls-1" x="14.04" y="7.47" width="251.2" height="1.56"/><path class="cls-1" d="M267.79,1.83H13.69S1.08,1.82,1.08,9.1c0,3,1.41,4,3.43,4A2.68,2.68,0,0,0,7.3,10.32,2.45,2.45,0,0,0,4.78,7.79C4.78,6,7.52,3.34,17,3.34H264.52c9.43,0,12.17,2.68,12.17,4.45a2.44,2.44,0,0,0-2.51,2.53A2.68,2.68,0,0,0,277,13.1c2,0,3.42-1,3.42-4C280.39,1.82,267.79,1.83,267.79,1.83Z"/><circle class="cls-1" cx="118.85" cy="5.69" r="0.62"/><circle class="cls-1" cx="106.44" cy="5.69" r="0.62"/><circle class="cls-1" cx="94.04" cy="5.69" r="0.62"/><circle class="cls-1" cx="81.63" cy="5.69" r="0.62"/><circle class="cls-1" cx="69.22" cy="5.69" r="0.62"/><circle class="cls-1" cx="56.82" cy="5.69" r="0.62"/><circle class="cls-1" cx="44.41" cy="5.69" r="0.62"/><circle class="cls-1" cx="32.01" cy="5.69" r="0.62"/><circle class="cls-1" cx="19.6" cy="5.69" r="0.62"/><circle class="cls-1" cx="258.15" cy="5.69" r="0.62"/><circle class="cls-1" cx="244.13" cy="5.69" r="0.62"/><circle class="cls-1" cx="230.11" cy="5.69" r="0.62"/><circle class="cls-1" cx="216.09" cy="5.69" r="0.62"/><circle class="cls-1" cx="202.07" cy="5.69" r="0.62"/><circle class="cls-1" cx="188.04" cy="5.69" r="0.62"/><circle class="cls-1" cx="174.02" cy="5.69" r="0.62"/><circle class="cls-1" cx="160" cy="5.69" r="0.62"/><circle class="cls-1" cx="145.98" cy="5.69" r="0.62"/></g>
      </svg>
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
      <h1><?= $data->headline2() ?></h1>
      <svg class="separator" viewBox="0 0 281.48 14.93">
        <defs><style>.cls-1{fill:#c3996c;}</style></defs><title>Artboard 49</title><g><rect class="cls-1" x="14.04" y="7.47" width="251.2" height="1.56"/><path class="cls-1" d="M267.79,1.83H13.69S1.08,1.82,1.08,9.1c0,3,1.41,4,3.43,4A2.68,2.68,0,0,0,7.3,10.32,2.45,2.45,0,0,0,4.78,7.79C4.78,6,7.52,3.34,17,3.34H264.52c9.43,0,12.17,2.68,12.17,4.45a2.44,2.44,0,0,0-2.51,2.53A2.68,2.68,0,0,0,277,13.1c2,0,3.42-1,3.42-4C280.39,1.82,267.79,1.83,267.79,1.83Z"/><circle class="cls-1" cx="118.85" cy="5.69" r="0.62"/><circle class="cls-1" cx="106.44" cy="5.69" r="0.62"/><circle class="cls-1" cx="94.04" cy="5.69" r="0.62"/><circle class="cls-1" cx="81.63" cy="5.69" r="0.62"/><circle class="cls-1" cx="69.22" cy="5.69" r="0.62"/><circle class="cls-1" cx="56.82" cy="5.69" r="0.62"/><circle class="cls-1" cx="44.41" cy="5.69" r="0.62"/><circle class="cls-1" cx="32.01" cy="5.69" r="0.62"/><circle class="cls-1" cx="19.6" cy="5.69" r="0.62"/><circle class="cls-1" cx="258.15" cy="5.69" r="0.62"/><circle class="cls-1" cx="244.13" cy="5.69" r="0.62"/><circle class="cls-1" cx="230.11" cy="5.69" r="0.62"/><circle class="cls-1" cx="216.09" cy="5.69" r="0.62"/><circle class="cls-1" cx="202.07" cy="5.69" r="0.62"/><circle class="cls-1" cx="188.04" cy="5.69" r="0.62"/><circle class="cls-1" cx="174.02" cy="5.69" r="0.62"/><circle class="cls-1" cx="160" cy="5.69" r="0.62"/><circle class="cls-1" cx="145.98" cy="5.69" r="0.62"/></g>
      </svg>
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

    <?php if($image = $data->cover3()->toFile()): ?>
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
      <h1><?= $data->headline3() ?></h1>
      <svg class="separator" viewBox="0 0 281.48 14.93">
        <defs><style>.cls-1{fill:#c3996c;}</style></defs><title>Artboard 49</title><g><rect class="cls-1" x="14.04" y="7.47" width="251.2" height="1.56"/><path class="cls-1" d="M267.79,1.83H13.69S1.08,1.82,1.08,9.1c0,3,1.41,4,3.43,4A2.68,2.68,0,0,0,7.3,10.32,2.45,2.45,0,0,0,4.78,7.79C4.78,6,7.52,3.34,17,3.34H264.52c9.43,0,12.17,2.68,12.17,4.45a2.44,2.44,0,0,0-2.51,2.53A2.68,2.68,0,0,0,277,13.1c2,0,3.42-1,3.42-4C280.39,1.82,267.79,1.83,267.79,1.83Z"/><circle class="cls-1" cx="118.85" cy="5.69" r="0.62"/><circle class="cls-1" cx="106.44" cy="5.69" r="0.62"/><circle class="cls-1" cx="94.04" cy="5.69" r="0.62"/><circle class="cls-1" cx="81.63" cy="5.69" r="0.62"/><circle class="cls-1" cx="69.22" cy="5.69" r="0.62"/><circle class="cls-1" cx="56.82" cy="5.69" r="0.62"/><circle class="cls-1" cx="44.41" cy="5.69" r="0.62"/><circle class="cls-1" cx="32.01" cy="5.69" r="0.62"/><circle class="cls-1" cx="19.6" cy="5.69" r="0.62"/><circle class="cls-1" cx="258.15" cy="5.69" r="0.62"/><circle class="cls-1" cx="244.13" cy="5.69" r="0.62"/><circle class="cls-1" cx="230.11" cy="5.69" r="0.62"/><circle class="cls-1" cx="216.09" cy="5.69" r="0.62"/><circle class="cls-1" cx="202.07" cy="5.69" r="0.62"/><circle class="cls-1" cx="188.04" cy="5.69" r="0.62"/><circle class="cls-1" cx="174.02" cy="5.69" r="0.62"/><circle class="cls-1" cx="160" cy="5.69" r="0.62"/><circle class="cls-1" cx="145.98" cy="5.69" r="0.62"/></g>
      </svg>
      <?= $data->text3()->kirbytext() ?>
    </div>

    <?php foreach($data->gallery3()->toFiles() as $image): ?>
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
      <h1><?= $data->headline4() ?></h1>
      <svg class="separator" viewBox="0 0 281.48 14.93">
        <defs><style>.cls-1{fill:#c3996c;}</style></defs><title>Artboard 49</title><g><rect class="cls-1" x="14.04" y="7.47" width="251.2" height="1.56"/><path class="cls-1" d="M267.79,1.83H13.69S1.08,1.82,1.08,9.1c0,3,1.41,4,3.43,4A2.68,2.68,0,0,0,7.3,10.32,2.45,2.45,0,0,0,4.78,7.79C4.78,6,7.52,3.34,17,3.34H264.52c9.43,0,12.17,2.68,12.17,4.45a2.44,2.44,0,0,0-2.51,2.53A2.68,2.68,0,0,0,277,13.1c2,0,3.42-1,3.42-4C280.39,1.82,267.79,1.83,267.79,1.83Z"/><circle class="cls-1" cx="118.85" cy="5.69" r="0.62"/><circle class="cls-1" cx="106.44" cy="5.69" r="0.62"/><circle class="cls-1" cx="94.04" cy="5.69" r="0.62"/><circle class="cls-1" cx="81.63" cy="5.69" r="0.62"/><circle class="cls-1" cx="69.22" cy="5.69" r="0.62"/><circle class="cls-1" cx="56.82" cy="5.69" r="0.62"/><circle class="cls-1" cx="44.41" cy="5.69" r="0.62"/><circle class="cls-1" cx="32.01" cy="5.69" r="0.62"/><circle class="cls-1" cx="19.6" cy="5.69" r="0.62"/><circle class="cls-1" cx="258.15" cy="5.69" r="0.62"/><circle class="cls-1" cx="244.13" cy="5.69" r="0.62"/><circle class="cls-1" cx="230.11" cy="5.69" r="0.62"/><circle class="cls-1" cx="216.09" cy="5.69" r="0.62"/><circle class="cls-1" cx="202.07" cy="5.69" r="0.62"/><circle class="cls-1" cx="188.04" cy="5.69" r="0.62"/><circle class="cls-1" cx="174.02" cy="5.69" r="0.62"/><circle class="cls-1" cx="160" cy="5.69" r="0.62"/><circle class="cls-1" cx="145.98" cy="5.69" r="0.62"/></g>
      </svg>
      <?= $data->text4()->kirbytext() ?>
      <svg class="separator--second" viewBox="0 0 281.48 14.93">
        <defs><style>.cls-1{fill:#c3996c;}</style></defs><title>Artboard 49</title><g><rect class="cls-1" x="14.04" y="7.47" width="251.2" height="1.56"/><path class="cls-1" d="M267.79,1.83H13.69S1.08,1.82,1.08,9.1c0,3,1.41,4,3.43,4A2.68,2.68,0,0,0,7.3,10.32,2.45,2.45,0,0,0,4.78,7.79C4.78,6,7.52,3.34,17,3.34H264.52c9.43,0,12.17,2.68,12.17,4.45a2.44,2.44,0,0,0-2.51,2.53A2.68,2.68,0,0,0,277,13.1c2,0,3.42-1,3.42-4C280.39,1.82,267.79,1.83,267.79,1.83Z"/><circle class="cls-1" cx="118.85" cy="5.69" r="0.62"/><circle class="cls-1" cx="106.44" cy="5.69" r="0.62"/><circle class="cls-1" cx="94.04" cy="5.69" r="0.62"/><circle class="cls-1" cx="81.63" cy="5.69" r="0.62"/><circle class="cls-1" cx="69.22" cy="5.69" r="0.62"/><circle class="cls-1" cx="56.82" cy="5.69" r="0.62"/><circle class="cls-1" cx="44.41" cy="5.69" r="0.62"/><circle class="cls-1" cx="32.01" cy="5.69" r="0.62"/><circle class="cls-1" cx="19.6" cy="5.69" r="0.62"/><circle class="cls-1" cx="258.15" cy="5.69" r="0.62"/><circle class="cls-1" cx="244.13" cy="5.69" r="0.62"/><circle class="cls-1" cx="230.11" cy="5.69" r="0.62"/><circle class="cls-1" cx="216.09" cy="5.69" r="0.62"/><circle class="cls-1" cx="202.07" cy="5.69" r="0.62"/><circle class="cls-1" cx="188.04" cy="5.69" r="0.62"/><circle class="cls-1" cx="174.02" cy="5.69" r="0.62"/><circle class="cls-1" cx="160" cy="5.69" r="0.62"/><circle class="cls-1" cx="145.98" cy="5.69" r="0.62"/></g>
      </svg>
      <?= $data->text4bottom()->kirbytext() ?>
    </div>

    <?php if($image = $data->cover4()->toFile()): ?>
    <figure class="featuredImage photoModule">
      <img
      src="<?= $image->url()?>"
      srcset="<?= $image->srcset() ?>"
      sizes="<?= sizes('featuredImage') ?>"
      alt="<?= $image->alt()?>"
      />
    </figure>
    <?php endif ?>
  </div>
</section>
