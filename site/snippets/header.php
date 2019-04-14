<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css(['assets/css/screen.css', '@auto']) ?>

</head>
<body>

  <div class="page">
    <header class="header">
      <a class="logo" href="<?= $site->url() ?>">
        <img src="<?= $site->url() ?>/assets/img/mono-logo.png" alt="<?= $site->title() ?>" />
      </a>

      <nav id="mainNav" class="mainNav">
        <?php foreach ($site->children()->listed() as $item): ?>
        <a href="#<?= $item->sectionID() ?>">
          <?= $item->title() ?>
        </a>
        <?php endforeach ?>
      </nav>
    </header>
