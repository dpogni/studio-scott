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
          if ( $project->image('thumbnail.jpg') ) {
            echo thumb($project->image('thumbnail.jpg'), array('width' => 768));
          } else {
            $images = $project->images()->sortBy('sort', 'asc');
            echo '<img src=' . $images->first()->url() . '>';
          }

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
