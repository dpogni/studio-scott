<?php snippet('header') ?>

  <main class="main home" role="main">

    <div class="text">
      <div class="homepage--new">
        <h2>New</h2>
        <figure>
          <?php echo '<img src=' . $page->image($page->heroImage())->url() . '>'; ?>



          <figcaption>
            <?php echo kirbytext($page->imageCaption()) ?>
          </figcaption>
        </figure>

        <?php echo kirbytext($page->intro()) ?>
      </div>

      <!-- Work Section -->
      <?php snippet('work') ?>
      <!-- /Work Section -->

      <h2>Studio</h2>
      <figure>
        <a href=""><img src="http://placehold.it/1168x550"></a>
      </figure>

      <h2>Connect</h2>
      <?php snippet('connect') ?>

      <?php snippet('social-networks') ?>

    </div>

  </main>

<?php snippet('footer') ?>
