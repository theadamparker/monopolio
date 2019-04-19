<section class="homephoto section--fullBleed">
  <?php if($image = $page->cover()->toFile()): ?>
    <img
    src="<?= $image->url()?>"
    srcset="<?= $image->srcset() ?>"
    alt="<?= $image->alt()?>"
    />
  <?php endif ?>
</section>
