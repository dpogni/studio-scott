<?php snippet('header') ?>

  <main class="main home" role="main">

    <div class="text">
      <div class="homepage--new">

        <figure>

          <?php if ( $page->heroImageLink() ) : ?>
            <a href="<?php echo $page->heroImageLink() ?>">
          <?php endif;

          echo '<img src=' . $page->image($page->heroImage())->url() . '>'; ?>

          <figcaption>
            <?php echo kirbytext($page->imageCaption()) ?>
          </figcaption>

          <?php if ( $page->heroImageLink() ) : ?>
            </a>
          <?php endif ?>

        </figure>

        <?php echo kirbytext($page->intro()) ?>

      </div>

      <!-- Work Section -->
      <h2><a href="work">Work</a></h2>

      <ul class="teaser cf">
        <li>
          <a href="/work/tag:identity">
            <img src="<?php echo $page->image( $page->identityImage() )->url() ?>">
            Identity
          </a>
        </li>
        <li>
          <a href="/work/tag:packaging">
            <img src="<?php echo $page->image( $page->packagingImage() )->url() ?>">
            Packaging
          </a>
        </li>
        <li>
          <a href="/work/tag:branding">
            <img src="<?php echo $page->image( $page->brandingImage() )->url() ?>">
            Branding
          </a>
        </li>
        <li>
          <a href="/work/tag:print">
            <img src="<?php echo $page->image( $page->printImage() )->url() ?>">
            Print
          </a>
        </li>
        <li>
          <a href="/work/tag:digital">
            <img src="<?php echo $page->image( $page->digitalImage() )->url() ?>">
            Digital / Motion
          </a>
        </li>
        <li>
          <a href="/work/tag:environmental-graphics">
            <img src="<?php echo $page->image( $page->environmentalGraphicsImage() )->url() ?>">
            Environmental Graphics
        </li>
      </ul>

      <!-- /Work Section -->

      <h2><a href="studio">Studio</a></h2>
      <figure>
        <a href="studio">
          <?php echo '<img src=' . $page->image($page->studioImage())->url() . '>'; ?>
        </a>
      </figure>

      <h2><a href="/connect">Connect</a></h2>
      <?php snippet('connect') ?>

      <?php snippet('social-networks') ?>

    </div>

  </main>

<?php snippet('footer') ?>
