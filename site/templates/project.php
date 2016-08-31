<?php snippet('header') ?>

  <main class="main project" role="main">

  <?php snippet('work-nav') ?>

    <h1><?php echo $page->title()->html() ?></h1>

    <?php if( $page->subheadline()): ?>
      <h2><?php echo $page->subheadline() ?></h2>
    <?php endif ?>

    <div class="text">
      <?php

        // image variables
        // sort images "array"
        $images = $page->images()->sortBy('sort', 'asc');
        // get first image from sorted array
        $imagesFirst = $images->first();
        // get thumbnail filename
        $thumbnail = $page->thumbnailImage();

        // if first image is thumbnail, star $images array on second image
        if ( $imagesFirst->filename() == $thumbnail ) {
          // set offset to image 2
          // then reset $imagesFirst to new first image
          $images = $images->offset(1);
          $imagesFirst = $images->first();

        }

      ?>

      <?php foreach( $images as $image ) : ?>
        <?php if ( $image == $imagesFirst ) : ?>

          <figure>
            <img src="<?php echo $image->url() ?>" alt="">
          </figure>

          <?php // render the main body copy
                echo $page->text()->kirbytext(); ?>

          <?php if ( $page->readMoreText()->kirbytext() ) : ?>
            <div class="read-more-container">
              <?php echo $page->readMoreText()->kirbytext() ?>
            </div>
          <?php endif; ?>


        <?php elseif ( $image->filename() == $thumbnail ) :

          continue;

        else: ?>

      <figure>
        <img src="<?php echo $image->url() ?>" alt="">
      </figure>

      <?php endif; ?>
    <?php endforeach; ?>

    </div>

    <?php if ( !$page->projectCredits()->empty() ): ?>
    <div class="project-credits">
      <?php echo $page->projectCredits()->kirbytext() ?>
    </div>
    <?php endif; ?>




    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&lt; previous</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">next &gt;</a>
      <?php endif ?>
    </nav>

  </main>

<?php snippet('footer') ?>
