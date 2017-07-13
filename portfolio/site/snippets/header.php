<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700|Press+Start+2P|Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
<body>

  <header class="header cf" role="banner">
    <a href="<?php echo url() ?>">
      strona główna
    </a>
    <div class="title-text">
      <h3><?php echo $site->title()->html() ?></h3>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <hr>

  </header>
