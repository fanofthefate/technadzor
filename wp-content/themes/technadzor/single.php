
<?php
$post = $wp_query->post;

  if (in_category('4')) { //ID категории
  	include(TEMPLATEPATH.'/single-4.php');
  } elseif (in_category('5')) {
  	include(TEMPLATEPATH.'/single-5.php');
  } 
  else
  {
  	include(TEMPLATEPATH.'/single-default.php');
  }
  ?>
