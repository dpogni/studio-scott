<?php snippet('header') ?>

  <main class="main project" role="main">

  <?php snippet('work-nav') ?>

    <h1><?php echo $page->title()->html() ?></h1>

    <?php if( $page->subheadline()): ?>
      <h2><?php echo $page->subheadline() ?></h2>
    <?php endif ?>

    <div class="text">
      <?php

        // image vars
        //

        $images = $page->images()->sortBy('sort', 'asc'); // create and sort images "array"
        $imagesFirst = $images->first(); // get first image from sorted array
        $thumbnail = $page->thumbnailImage(); // get thumbnail filename

        // if first image is thumbnail, start $images array on second image
        if ( $imagesFirst->filename() == $thumbnail ) {
          // set offset to second image
          // then reset $imagesFirst to new first image
          $images = $images->offset(1);
          $imagesFirst = $images->first();

        }

        foreach( $images as $image ) :
           if ( $image == $imagesFirst ) : ?>

          <figure>
            <img src="<?php echo $image->url() ?>" alt="">
          </figure>

          <?php // render the main body copy
                echo $page->text()->kirbytext(); ?>

          <?php if ( $page->readMoreText()->kirbytext() ) : ?>
            <div class="read-more-container">
              <?php echo $page->readMoreText()->kirbytext() ?>
            </div>
          <?php endif;

          // fetch all video formats we need
          $videos = array(
            $page->videos()->find('movie.mp4')
          );

          if ( $page->videos()->find('movie.mp4') ) :
          snippet('video', array(
            'videos' => $videos,
            'controls' => true
          ));
          endif;

          elseif ( $image->filename() == $thumbnail ) :

          continue;

        else: ?>

      <figure>
        <img src="<?php echo $image->url() ?>" alt="">
      </figure>

      <?php endif;

     endforeach; ?>

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
