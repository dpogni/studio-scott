<?php
  // fetch the basic set of articles
  $projects = $page->children()->visible();

  // add the tag filter
  if($tag = param('tag')) {
    $projects = $projects->filterBy('tags', $tag, ',');
  }

?>

<?php snippet('header') ?>

  <main class="main" role="main">

  <?php snippet('work-nav') ?>

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>

  <ul class="teaser cf">
    <?php foreach($projects as $project): ?>
      <li>
        <a href="<?php echo $project->url() ?>">

          <?php

          echo '<img src=' . $project->contentURL() . '/' . $project->thumbnailImage() . '>';

          echo $project->title();

          if ($project->tagSubheadline()): ?>

            <span><?php echo $project->tagSubheadline() ?></span>

          <?php endif ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>


  </main>

<?php snippet('footer') ?>
