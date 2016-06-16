<?php snippet('header') ?>

  <main class="main project" role="main">

  <?php snippet('work-nav') ?>

    <h1><?php echo $page->title()->html() ?></h1>

    <?php if( $page->subheadline()): ?>
      <h2><?php echo $page->subheadline() ?></h2>
    <?php endif ?>

    <div class="text">
      <?php

      $images = $page->images()->sortBy('sort', 'asc');
      $imagesFirst = $images->first();
      $thumbnail = $images->thumbnailImage();

      echo $thumbnail;

      // if thumbnail, do not show

      if ( $imagesFirst ): ?>
      <figure>
        <img src="<?php echo $imagesFirst->url() ?>" alt="<?php echo $page->title()->html() ?>">
      </figure>
      <?php endif; ?>

      <?php echo $page->text()->kirbytext();

      foreach( $images as $image ):
        if ( $image == $imagesFirst ) {
          continue;
        } elseif ( $image->filename() == $thumbnail ) {
          continue;
        } else {
      ?>
      <figure>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
      </figure>

      <?php } endforeach ?>

    </div>

    <?php if ( !$page->projectCredits()->empty() ): ?>
    <div class="project-credits">
      <?php echo $page->projectCredits()->kirbytext() ?>
    </div>
    <?php endif; ?>




    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
      <?php endif ?>
    </nav>

  </main>

<?php snippet('footer') ?>
