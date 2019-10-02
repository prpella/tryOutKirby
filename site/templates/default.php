<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title><?= $site->title() ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>

    <header>
      <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>
    </header>

    <nav class="menu">
      <?php foreach ($site->children() as $subpage): ?>
        <a href=""></a>
      <?php endforeach ?>
    </nav>


    <h1><?= $page->title() ?></h1>
    <?= $page->text() ?>
    <?= $page->city() ?>
    
  </body>
</html>

