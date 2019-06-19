<?php
add_action('widgets_init', 'zendvn_theme_widgets_init');
function zendvn_theme_widgets_init(){
	$themeName="dienkimtheme";
	register_sidebar(array(
		'name'          => __( 'XT counter visitor', $themeName ),
		'id'            => 'xt_counter_visitor',
		'class'         => '',
		'before_widget' => '<div class="box-dmsp">',
		'before_title'  => '<h2 class="dmsp-h">',
		'after_title'   => '</h2>',
		'after_widget'  => '</div>'
	));
}
?>