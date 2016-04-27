<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  thumbnail:
      label: Thumbnail
      type: info
      text: >
        To select a thumbnail, rename one of the images 'thumbnail.jpg'. If no image has that filename, the first image will be used.
  title:
    label: Title
    type: text
  subheadline:
    label: Subheadline
    type: text
  text:
    label: Text
    type: textarea
  readMoreText:
    label: Read More Text
    type: textarea
  projectCredits:
    label: Project Credits
    type: textarea
  tags:
    label: Tags
    type: tags
    lower: true
  tagSubheadline:
    label: Tag Subheadline
    type: text
