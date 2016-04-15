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
        <p>
          Design matters because it is a part of everything. But it doesn’t <a href="">happen in a vaccuum</a>. It takes conviction on the part of the client and listening on the part of the designer. It is a partnership where—at the end of a journey—there is something to celebrate.
        </p>
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

      <div class="social-networks">

        <a href="http://twitter.com/studioscottsf"><img src="<?php echo url('assets/images/social-twitter.png') ?>" alt="Studio Scott Twitter" /></a>
        <a href="https://www.facebook.com/StudioScottSF"><img src="<?php echo url('assets/images/social-fb.png') ?>" alt="Studio Scott Facebook" /></a>

      </div>

    </div>

  </main>

<?php snippet('footer') ?>
