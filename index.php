<?php 
// Something I know PHPCS would flag

$bar = 'testing';
if ( $_COOKIE['test'] ) {
  echo $bar;
}
