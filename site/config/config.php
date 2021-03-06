<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PRO-e1502eb8dd9045b6c47a3b458ba24ad4');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/


/*

---------------------------------------
WYSIWYG Additional Configuration
---------------------------------------

https://github.com/storypioneers/kirby-wysiwyg

*/


c::set('field.wysiwyg.buttons', array(
          'h1',
          'h2',
          'h3',
          'bold',
          'italic',
          'quote',
          'unorderedlist',
          'orderedlist',
          'anchor',
          )
);
