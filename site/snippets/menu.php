<div class="nav-close-shield"></div>

<nav role="navigation">

  <a href="" class="toggle-nav">
    <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    	 width="21.5px" height="14px" viewBox="0 0 21.5 14" enable-background="new 0 0 21.5 14" xml:space="preserve">
    <g>
    	<path d="M20.5,2H1C0.448,2,0,1.552,0,1s0.448-1,1-1h19.5c0.552,0,1,0.448,1,1S21.052,2,20.5,2z"/>
    </g>
    <g>
    	<path d="M20.5,8.201H1c-0.552,0-1-0.447-1-1c0-0.552,0.448-1,1-1h19.5c0.552,0,1,0.448,1,1
    		C21.5,7.754,21.052,8.201,20.5,8.201z"/>
    </g>
    <g>
    	<path d="M20.5,14H1c-0.552,0-1-0.448-1-1s0.448-1,1-1h19.5c0.552,0,1,0.448,1,1S21.052,14,20.5,14z"/>
    </g>
    </svg>
  </a>

  <ul class="menu cf">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

      <!--
      <?php if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
    <?php endif ?>
    -->

    </li>
    <?php endforeach ?>
  </ul>

</nav>
