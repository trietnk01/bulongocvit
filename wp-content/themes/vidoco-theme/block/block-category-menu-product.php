<div class="box-dmsp">
    <h2 class="dmsp-h"><?php echo wp_get_nav_menu_name("dm_menu_san_pham"); ?></h2>
    <?php
    $args = array(
        'menu'              => '',
        'container'         => '',
        'container_class'   => '',
        'container_id'      => '',
        'menu_class'        => 'dmsp-lst',
        'echo'              => true,
        'fallback_cb'       => 'wp_page_menu',
        'before'            => '',
        'after'             => '',
        'link_before'       => '',
        'link_after'        => '',
        'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'             => 3,
        'walker'            => '',
        'theme_location'    => 'dm_menu_san_pham' ,
        'menu_li_actived'       => 'current-menu-item',
        'menu_item_has_children'=> 'menu-item-has-children',
    );
    wp_nav_menu($args);
    ?>
</div>