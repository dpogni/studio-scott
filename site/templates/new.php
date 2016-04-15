<?php snippet('header') ?>

  <main class="main new" role="main">

    <?php snippet('connect') ?>

    <?php foreach( $page->children()->visible()->flip() as $article ): ?>
    <article>
      <h2><?php echo $article->title()->html() ?></h2>

      <p><?php echo $article->text()->kirbytext() ?></p>

      <?php if ( !$article->workLink()->empty() ): ?>

      <p><a href="<?php echo $article->workLink()->url() ?>">Show me more</a></p>

      <?php endif; ?>

    </article>

    <?php endforeach ?>

  </main>

<?php snippet('footer') ?>
