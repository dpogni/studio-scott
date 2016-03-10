<?php if($page->find('work')): ?>
<h2>Work</h2>
<?php else: ?>
<header class="page-title">Work</header>
<?php endif ?>





<ul class="work-nav">
  <li>
    <a href="/work">All</a>
  </li>
  <li>
    <a href="/work/tag:identity">Identity</a>
  </li>
  <li>
    <a href="/work/tag:branding">Branding</a>
  </li>
  <li>
    <a href="/work/tag:packaging">Packaging</a>
  </li>
  <li>
    <a href="/work/tag:print">Print</a>
  </li>
  <li>
    <a href="/work/tag:digital">Digital</a>
  </li>
  <li>
    <a href="/work/tag:environmental-graphics">Environmental Graphics</a>
  </li>
</ul>


<!-- <?php

// fetch all tags
$tags = $pages->find('work')->children()->visible()->pluck('tags', ',', true);

?>
<ul class="tags">
  <li><a href="/work">All</a></li>
  <?php foreach($tags as $tag): ?>
  <li>
    <a href="<?php echo url('/work/tag:' . $tag)?>">
      <?php echo html($tag) ?>
    </a>
  </li>
  <?php endforeach ?>
</ul> -->
