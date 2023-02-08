<!-- chua cac ham dung chung cho theme -->
<?php
// get menu chinh
function theme_settup()
{
    register_nav_menu('header-menu', __('Menu chính'));
}
add_action('init', 'theme_settup');
// get add thumbnail post
add_theme_support( 'post-thumbnails' ); 
?>