<?php snippet('header') ?>

  <main class="main home" role="main">

    <div class="text">
      <div class="homepage--new">
        <h2><a href="new">New</a></h2>
        <figure>
          <?php echo '<img src=' . $page->image($page->heroImage())->url() . '>'; ?>



          <figcaption>
            <?php echo kirbytext($page->imageCaption()) ?>
          </figcaption>
        </figure>

        <?php echo kirbytext($page->intro()) ?>
      </div>

      <!-- Work Section -->
      <h2><a href="work">Work</a></h2>
      <?php snippet('work') ?>
      <!-- /Work Section -->

      <h2><a href="studio">Studio</a></h2>
      <figure>
        <a href="studio"><img src="http://placehold.it/1168x550"></a>
      </figure>

      <h2><a href="/connect">Connect</a></h2>
      <?php snippet('connect') ?>

      <?php snippet('social-networks') ?>

    </div>

  </main>

<?php snippet('footer') ?>
