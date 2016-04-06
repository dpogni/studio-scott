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
      Banner image: delete the old and upload a new file called 'studio-banner.png'.
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
      Headshot image: delete the old and upload a new file called 'laura-scott.png'.
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
