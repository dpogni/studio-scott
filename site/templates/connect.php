<?php snippet('header') ?>
<main class="main" role="main">
  <h1><?php echo $page->title()->html() ?></h1>
  <!-- Load connect snippet -->
  <?php snippet('connect') ?>
  <div class="text">
    <!-- Google Map -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6305.989457707353!2d-122.4074552!3d37.7901633!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808979c10def%3A0xa8179858d4e6eaed!2s425+Bush+St+%23410%2C+San+Francisco%2C+CA+94108!5e0!3m2!1sen!2sus!4v1454305686522" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <h2>Interns</h2>
    <?php echo $page->interns()->kirbytext() ?>
    <?php snippet('social-networks') ?>
  </div>
</main>
<?php snippet('footer') ?>
