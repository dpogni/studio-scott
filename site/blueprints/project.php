<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  subheadline:
    label: Subheadline
    type: text
  text:
    label: Text
    type: textarea
  readMoreText:
    label: Read More Text
    type: textarea
  tags:
    label: Tags
    type: tags
    lower: true
  tagSubheadline:
    label: Tag Subheadline
    type: text
  projectCredits:
    label: Project Credits
    type: textarea
