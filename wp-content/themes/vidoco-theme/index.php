<?php
/*
	Home template default
*/
	get_header();
	?>
	<h1 style="display: none;"><?php echo bloginfo( "name" ); ?></h1>
    <div class="container box-index">
        <div class="row">
            <div class="col">
                <?php include get_template_directory()."/block/block-banner.php"; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <?php
                include get_template_directory()."/block/block-category-menu-product.php";
                if(is_active_sidebar( "xt_counter_visitor" )) {
                    dynamic_sidebar( "xt_counter_visitor" );
                }
                include get_template_directory()."/block/block-about-us.php";
                ?>
            </div>
            <div class="col-lg-6">
                <?php
                $hp_za_category_rpt=get_field("hp_za_category_rpt","option");
                if(count(@$hp_za_category_rpt) > 0){
                    foreach ($hp_za_category_rpt as $key => $value) {
                        $hp_zaproduct_rpt=@$value["hp_zaproduct_rpt"];
                        ?>
                        <div class="dssp-box">
                            <h2 class="dssp-h"><?php echo @$value["hp_za_category_name"]; ?></h2>
                            <?php
                            if(count(@$hp_zaproduct_rpt) > 0){
                                ?>
                                <div class="main-product-box">
                                    <?php
                                    $k=0;
                                    foreach ($hp_zaproduct_rpt as $key_1 => $value_1) {
                                        if($k%3 == 0){
                                            echo '<div class="row">';
                                        }
                                        $post_id=$value_1["hp_za_product_item"];
                                        $args=array(
                                            "post_type"=>"zaproduct",
                                            "p"=>@$post_id
                                        );
                                        $the_query_product_featured=new WP_Query($args);
                                        if($the_query_product_featured->have_posts()){
                                            while ($the_query_product_featured->have_posts()){
                                                $the_query_product_featured->the_post();
                                                $post_id=$the_query_product_featured->post->ID;
                                                $permalink=get_the_permalink(@$post_id);
                                                $title=get_the_title(@$post_id);
                                                $excerpt=get_the_excerpt(@$post_id);
                                                $featured_img=get_the_post_thumbnail_url(@$post_id, 'full');
                                                ?>
                                                <div class="col-lg-4">
                                                    <div class="box-oc-vit-bulong-item">
                                                        <div class="box-oc-bu-img">
                                                            <a href="<?php echo @$permalink; ?>">
                                                                <div class="box-product-featured-img">
                                                                    <img src="<?php echo @$featured_img; ?>" alt="<?php echo @$title; ?>">
                                                                </div>
                                                                <div class="panel-top-to-bottom"></div>
                                                                <div class="panel-bottom-to-top"></div>
                                                                <div class="panel-link">
                                                                    <div class="panel-circle">
                                                                        <i class="fas fa-link"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <h3 class="box-oc-bu-title"><a href="<?php echo @$permalink; ?>"><?php echo wp_trim_words( @$title,55,null ) ; ?></a></h3>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                        $k++;
                                        if($k%3 == 0 || $k==count(@$hp_zaproduct_rpt)){
                                            echo '</div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <div class="col-lg-3">
                <?php include get_template_directory()."/block/block-right-sidebar.php"; ?>
            </div>
            <?php
            get_footer();
            ?>