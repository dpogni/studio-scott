<?php
// stop without videos
if(empty($videos)) return;
// set some defaults
if(!isset($width))    $width    = 1024;
if(!isset($height))   $height   = 768;
if(!isset($preload))  $preload  = true;
if(!isset($controls)) $controls = true;
if(!isset($autoplay)) $autoplay = true;
if(!isset($loop))     $loop     = true;
// build the html tags for the video element
$preload  = ($preload)  ? ' preload'   : '';
$controls = ($controls) ? ' controls' : '';
$autoplay = ($autoplay) ? ' autoplay' : '';
$loop = ($loop) ? ' loop' : '';
?>
<video class="project__video" width="<?php echo $width ?>" height="<?php echo $height ?>"<?php echo $preload . $controls . $autoplay . $loop ?>>
  <?php foreach($videos as $video): ?>
  <source src="<?php echo $video->url() ?>" type="<?php echo $video->mime() ?>" />
  <?php endforeach ?>
  <?php if(isset($thumb)): ?>
  <img src="<?php echo $thumb->url() ?>" alt="<?php echo $thumb->title() ?>" />
  <?php endif ?>
</video>
