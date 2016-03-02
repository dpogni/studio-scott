<h2>Work</h2>

<!-- <ul class="teaser cf">
  <?php foreach(page('work')->children()->visible()->limit(6) as $work): ?>
  <li>

    <?php if($image = $work->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $work->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $work->title()->html() ?>" >
    </a></php <?php else: ?>
      <a href="<?php echo $work->url() ?>">
        <img src="http://placehold.it/380x230">
      </a>
    <?php endif ?>

    <h3>
      <a href="<?php echo $work->url() ?>">
        <?php echo $work->title()->html() ?>
      </a>
    </h3>

    <?php if($image = $work->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $work->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $work->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul> -->

<ul class="teaser cf">
  <li>

    <a href="http://localhost:8000/work/identity">
      <img src="http://placehold.it/370x270">
    </a>

    <h3>
      <a href="http://localhost:8000/work/identity">
        Identity
      </a>
    </h3>

  </li>
  <li>

    <a href="http://localhost:8000/work/packaging">
      <img src="http://placehold.it/370x270">
    </a>

    <h3>
      <a href="http://localhost:8000/work/packaging">
    Packaging      </a>
    </h3>
  </li>
  <li>
    <a href="http://localhost:8000/work/branding">
      <img src="http://placehold.it/370x270">
    </a>

    <h3>
      <a href="http://localhost:8000/work/branding">
    Branding      </a>
    </h3>

  </li>
  <li>
    <a href="http://localhost:8000/work/print">
      <img src="http://placehold.it/370x270">
    </a>
    <h3>
      <a href="http://localhost:8000/work/print">
      Print      </a>
    </h3>
  </li>
  <li>
    <a href="http://localhost:8000/work/digital-motion">
      <img src="http://placehold.it/370x270">
    </a>
    <h3>
      <a href="http://localhost:8000/work/digital-motion">
    Digital / Motion      </a>
    </h3>

  </li>
  <li>

    <a href="http://localhost:8000/work/environmental-graphics">
      <img src="http://placehold.it/370x270">
    </a>

    <h3>
      <a href="http://localhost:8000/work/environmental-graphics">
    Environmental Graphics      </a>
    </h3>

  </li>
</ul>
