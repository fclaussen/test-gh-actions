<?php 
// Something I know PHPCS would flag

$foo = 'testing';
if ( $_COOKIE['test'] ) {
  echo $foo;
}
