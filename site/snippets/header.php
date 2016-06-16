<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('/assets/css/main.css') ?>

  <script type='text/javascript' src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script type='text/javascript' src='/assets/js/scripts.js'></script>

</head>

<body>

<div class="header-container">
    <header class="header cf" role="banner">
      <a class="logo" href="<?php echo url() ?>">
        <!-- TODO: add SVG fallback -->
        <img src="<?php echo url('/assets/images/studio-scott.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
      </a>
      <?php snippet('menu') ?>
    </header>
</div>

<div class="container">
