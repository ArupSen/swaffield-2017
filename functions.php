<?php
if ( function_exists('register_sidebar') )
    register_sidebar();
function header_widget()
{
  register_sidebar(array(
    'name' => 'Custom Header Widget Area',
    'id' => 'custom-header-widget',
    'before_widget' => '<div class="chw-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="chw-title">',
    'after_title' => '</h2>',
  ));
}
add_action( 'widgets_init', 'header_widget');
?>
