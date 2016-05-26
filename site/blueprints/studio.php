<?php if(!defined('KIRBY')) exit ?>

title: Studio
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  bannerImage:
    label: Banner Image
    type: info
    text: >
      Banner image: To show studio banner image, name your image .jpg 'studio-banner.jpg'.
  process:
    label: Process
    type:  textarea
  founder:
    label: Founder
    type:  textarea
  headshotImage:
    label: Founder Headshot
    type: info
    text: >
      Headshot image: To show founder image, name your image .jpg 'laura-scott.job'.
  clients:
    label: Clients
    type:  textarea
  clientsListLeft:
    label: Clients List - Left
    type:  textarea
    width: 1/2
  clientsListRight:
    label: Clients List - Right
    type:  textarea
    width: 1/2
