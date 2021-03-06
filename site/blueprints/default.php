<?php if(!defined('KIRBY')) exit ?>

title: Page
pages:
  - default
  - anchor
files: true
fields:
  title:
    label: Title
    type:  text
  description:
    label: Description (SEO)
    type:  text
    validate:
      minLength: 100
      maxLength: 160
  text:
    label: Text
    type:  textarea