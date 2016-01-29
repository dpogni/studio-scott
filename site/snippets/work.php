<h2>Work</h2>

<ul class="teaser cf">
  <?php foreach(page('work')->children()->visible()->limit(6) as $work): ?>
  <li>
    <h3><a href="<?php echo $work->url() ?>"><?php echo $work->title()->html() ?></a></h3>
    <?php if($image = $work->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $work->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $work->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
