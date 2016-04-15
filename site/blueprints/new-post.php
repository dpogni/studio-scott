<?php if(!defined('KIRBY')) exit ?>

title: New Post
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  workLink:
    label: Link to Work page
    help: This manually adds a link to the work page. Leave blank if there's no work page.
    type: page


