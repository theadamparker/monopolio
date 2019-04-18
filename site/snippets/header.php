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
    <header class="header">
      <ul class="languageSelect">
        <?php foreach($kirby->languages() as $language): ?>
        <li<?php e($kirby->language() == $language, ' class="active"') ?>>
          <a href="<?php echo $language->url() ?>">
            <?php echo html($language->locale()) ?>
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
      <ul class="socialMedia">
        <li>Icon</li>
        <li>Icon</li>
      </ul>
    </header>
