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
      <a class="logo" href="<?= $site->url() ?>">
        <img src="<?= $site->url() ?>/assets/img/mono-logo.png" alt="<?= $site->title() ?>" />
      </a>

      <nav id="mainNav" class="mainNav">
        <?php foreach ($site->children()->listed() as $item): ?>
        <a href="#<?= $item->sectionID() ?>">
          <?php if ($item->headline() != '') {
            echo $item->headline();
          } else {
            echo $item->title();
          } ?>
        </a>
        <?php endforeach ?>
      </nav>
    </header>
