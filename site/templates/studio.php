<?php snippet('header') ?>

  <main class="main" role="main">



    <h1><?php echo $page->title()->html() ?></h1>

    <?php if($image = $page->image('studio-banner.png')): ?>
    <figure class="studio__hero">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
    </figure>
    <?php endif ?>

    <div class="studio__process">

      <h2>Process</h2>

      <?php echo $page->process()->kirbytext() ?>
    </div>

    <div class="studio__founder">

      <h2>Founder</h2>

      <?php if($image = $page->image('laura-scott.png')): ?>
      <figure class="studio__founder--img">
        <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
      </figure>
      <?php endif ?>

      <?php echo $page->founder()->kirbytext() ?>

      <p><a href="https://www.linkedin.com/in/laura-scott-4189a74" class="studio__founder-linkedin">Connect on LinkedIn</a></p>

    </div><!-- end studio__founder -->

    <div class="studio__clients">

      <h2>Clients</h2>

      <?php echo $page->founder()->kirbytext() ?>

    </div>

    <div class="studio__clients--left">

      <?php echo $page->clientsListLeft()->kirbytext() ?>

    </div>

    <div class="studio__clients--right">

      <?php echo $page->clientsListRight()->kirbytext() ?>

    </div>

  </main>

<?php snippet('footer') ?>
