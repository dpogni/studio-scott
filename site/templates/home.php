<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <hr>



    <h2>New</h2>
    <!-- To Do
    #Pull latest posts large image
    #large image overlay
    #intro copy
    -->


    <h2>Work</h2>
    <?php snippet('work') ?>

    <h2>Conenct</h2>
    <!-- To Do
    Pull 3 column connect copy
    -->

  </main>

<?php snippet('footer') ?>
