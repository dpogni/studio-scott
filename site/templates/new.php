<?php snippet('header') ?>

  <main class="main" role="main">

    <?php snippet('connect') ?>

  </main>

<?php snippet('footer') ?>


<?php

echo $new = $page->children()
                 ->visible()
                 ->flip()
                 ->paginate(2);

 ?>
