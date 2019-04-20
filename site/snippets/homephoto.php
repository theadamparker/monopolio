<section class="homephoto"<?php if($image = $page->cover()->toFile()): ?> style="background-image: url('<?= $image->url()?>');"<?php endif ?>>
</section>
