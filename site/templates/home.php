<?php snippet('header') ?>

  <main class="main home" role="main">

    <div class="text">
      <div class="homepage--new">
        <h2>New</h2>
        <figure>
          <img src="http://placehold.it/1168x730">
          <figcaption>
            An unconventional look at the history of Stanford Law School.
          </figcaption>
        </figure>
        <?php echo kirbytext($page->text()) ?>
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
