<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Page Title
    type: text

  heroHeadline:
    label: Hero Image
    type: headline
  heroImage:
    label: Hero Image
    type: image
  heroImageLink:
    label: Hero Image Link
    type: page
    placeholder: Type `work/` and form will start to auto-fill
  imageCaption:
    label: Hero Image Caption
    type: text

  homeBodyText:
    label: Home Body Text
    type: headline
  intro:
    label: Body Text
    type: textarea
    size: large

  workImages:
    label: Work Thumbnail Images
    type: headline
  identityImage:
    label: Identity Image
    type: image
  packagingImage:
    label: Packaging Image
    type: image
  brandingImage:
    label: Branding Image
    type: image
  printImage:
    label: Print Image
    type: image
  digitalImage:
    label: Digital / Motion Image
    type: image
  environmentalGraphicsImage:
    label: Environmental Graphics
    type: image

  homeStudioHeadline:
    label: Studio
    type: headline
  studioImage:
    label: Studio Image
    type: image
