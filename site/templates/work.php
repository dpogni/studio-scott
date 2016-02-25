<?php snippet('header') ?>



  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

  <ul class="teaser cf">
    <?php foreach($page->children()->visible() as $project): ?>
      <li>
        <a href="<?php echo $project->url() ?>"><?php echo $project->image()->html() ?></a>
        <a href="<?php echo $project->url() ?>"><?php echo $project->title() ?></a>

        <?php endforeach ?>
  </ul>


  </main>

<?php snippet('footer') ?>
