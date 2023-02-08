<!-- chua cac ham dung chung -->

<!-- ham chuyen so thanh tien te -->
<?php 
// tao
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Menu chính' ));
}
add_action( 'init', 'register_my_menu' );



?>
