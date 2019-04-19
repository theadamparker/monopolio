<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css(['assets/css/screen.css', '@auto']) ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>

  <div class="page">
    <header class="header transparent">
      <ul class="languageSelect">
        <?php foreach($kirby->languages() as $language): ?>
        <li<?php e($kirby->language() == $language, ' class="active"') ?>>
          <a href="<?php echo $language->url() ?>">
            <?php echo html($language->name()) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
      <a class="logo" href="<?= $site->url() ?>">
        <img src="<?= $site->url() ?>/assets/img/mono-logo.png" alt="<?= $site->title() ?>" />
      </a>

      <nav id="mainNav" class="mainNav">
        <?php foreach ($site->children()->listed() as $item): ?>
        <a href="#<?= $item->sectionID() ?>">
          <?= $item->navTitle() ?>

        </a>
        <?php endforeach ?>
      </nav>
      <div class="socialMedia">
        <a href="https://untappd.com/b/cerveceria-de-san-luis-monopolio/2210050">
          <svg class="socialMediaIcon" viewBox="0 0 31 31.1">
            <path d="M23.1.5H7.9A7.38,7.38,0,0,0,.5,7.9V23.2a7.38,7.38,0,0,0,7.4,7.4H23.2a7.41,7.41,0,0,0,7.4-7.5V7.9A7.41,7.41,0,0,0,23.1.5M12.6,6.9a1.8,1.8,0,0,1,.9-.4.1.1,0,0,1,.1.1h0v.2c0,.1,0,.1.1.1h.1a.1.1,0,0,1,.1.1v.2l1,1v.2h0c-.5.6-1,1.2-1.4,1.6h-.1l-.8-1.6-.2-.1-.1-.1V8c0-.1,0-.1-.1-.1H12c-.1,0-.1-.1-.1-.2a2.7,2.7,0,0,1,.7-.8m2.7,7.9L15.1,16a2.57,2.57,0,0,1-.5,1.2L9.1,24.9a1.22,1.22,0,0,1-1.2.5,4.85,4.85,0,0,1-2.1-.8,5,5,0,0,1-1.5-1.7,1.41,1.41,0,0,1,.1-1.4l5.5-7.7a2.84,2.84,0,0,1,1-.9l1.1-.6c.2-.1.4-.3.6-.4.5-.6,1.9-2.2,4.4-4.7V7.1c0-.1.1-.1.2-.1h.1a.1.1,0,0,0,.1-.1h0V6.7c0-.1,0-.1.1-.1h0a2.11,2.11,0,0,1,1,.4,1.56,1.56,0,0,1,.6.8c0,.1,0,.1-.1.2h-.2a.1.1,0,0,0-.1.1v.1a.1.1,0,0,1-.1.1l-.2.1c-1.6,3.2-2.6,5-3,5.7,0,.2-.1.4-.1.7m11.4,8.1a3.53,3.53,0,0,1-1.5,1.7,4.85,4.85,0,0,1-2.1.8,1.66,1.66,0,0,1-1.2-.5l-5.5-7.7a3.08,3.08,0,0,1-.5-1.2v-.1a2,2,0,0,1,0-1.1.52.52,0,0,1,.2-.4c.2-.4.8-1.4,1.6-3.1h.1l.6.6a2.09,2.09,0,0,0,.6.4l1,.5a2.84,2.84,0,0,1,1,.9l5.5,7.7a1.43,1.43,0,0,1,.2,1.5"/>
          </svg>
        </a>
        <a href="">
          <svg class="socialMediaIcon" viewBox="0 0 31 31.1">
            <path d="M23.1.5H7.9A7.38,7.38,0,0,0,.5,7.9V23.2a7.38,7.38,0,0,0,7.4,7.4h6.5V19.8H11.6a.67.67,0,0,1-.7-.6h0V15.7a.68.68,0,0,1,.7-.7h2.8V11.6c0-3.9,2.4-6,5.9-6h2.9a.68.68,0,0,1,.7.7V9.2a.68.68,0,0,1-.7.7H21.4c-1.9,0-2.3.9-2.3,2.2V15h4.1a.67.67,0,0,1,.7.6v.1l-.4,3.5a.67.67,0,0,1-.7.6H19.1V30.6h4a7.41,7.41,0,0,0,7.4-7.5V7.9A7.26,7.26,0,0,0,23.1.5" />
          </svg>
        </a>
        <a href="https://www.instagram.com/monopolio.cerveza/">
          <svg class="socialMediaIcon" viewBox="0 0 31 31.1">
            <path d="M15.5,9.7a5.91,5.91,0,0,0-5.9,5.9,5.9,5.9,0,0,0,11.8,0h0a5.85,5.85,0,0,0-5.9-5.9" /><path d="M23.1.5H7.9A7.38,7.38,0,0,0,.5,7.9V23.2a7.38,7.38,0,0,0,7.4,7.4H23.2a7.41,7.41,0,0,0,7.4-7.5V7.9A7.41,7.41,0,0,0,23.1.5M15.5,23.7a8.1,8.1,0,1,1,8.1-8.1,8.07,8.07,0,0,1-8.1,8.1M23.9,8.3A1.3,1.3,0,1,1,25.2,7h0a1.32,1.32,0,0,1-1.3,1.3h0" />
          </svg>
        </a>
      </div>
    </header>
