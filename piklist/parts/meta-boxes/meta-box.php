<?php
/**
 * Title: My custom fields
 * Post Type: post
 */

piklist('field', array(
    'type' => 'text',
    'field' => 'my_text',
    'label' => 'Text',
    'attributes' => array(
      'class' => 'regular-text' // WordPress css class
    )
  ));