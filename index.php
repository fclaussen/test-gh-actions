<?php 
// Something I know PHPCS would flag

$var = 'testing';
if ( $_COOKIE['test'] ) {
  echo $var;
}
