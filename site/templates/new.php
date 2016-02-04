<?php snippet('header') ?>

  <main class="main" role="main">

    <?php snippet('connect') ?>

    <?php foreach($page->children()->visible()->flip() as $article): ?>

    <article>
      <h2><?php echo $article->title()->html() ?></h2>
      <p><?php echo $article->text()->excerpt(300) ?></p>
      <a href="<?php echo $article->url() ?>">Read more…</a>
    </article>

    <?php endforeach ?>

  </main>

<?php snippet('footer') ?>
