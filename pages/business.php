<?php

include_once '../includes/global.inc.php';

$add->openw('header', 'left', '');

  $add->title( 'business' );
  $add->navbar();

$add->shut('header');

$add->openw('main', 'grid-container', '');

  $add->lorem_ipsum();

$add->shut('main');

$add->openw('footer', 'right', '');

  $add->declare_c();

$add->shut('footer');

// EOF
