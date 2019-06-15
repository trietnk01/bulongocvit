<?php
// -------------------------------
//  Load support
// -------------------------------
add_action('init','p_load_support');
function p_load_support(){
    register_nav_menus(
        array(
            "primary"    => __( "Primay Menu"),
            "dm_menu_san_pham"    => __( "Danh mục sản phẩm"),
        )
    );
}
