<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type: text
  subheadline:
    label: Subheadline
    type: text
  thumbnailImage:
    label: Thumbnail Image
    type: image
    help: Note&colon; Thumbnails should be cropped to 369 x 289px. This thumbnail image will not appear on the project's image feed.
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
