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
                for ($v=0; $v < 3; $v++) {
                    ?>
                    <div class="dssp-box">
                        <h2 class="dssp-h">Bu lông ốc vít</h2>
                        <div class="main-product-box">
                            <?php
                            $k=0;
                            for ($i=0; $i < 9; $i++) {
                                if($k%3 == 0){
                                    echo '<div class="row">';
                                }
                                ?>
                                <div class="col-lg-4">
                                    <div class="box-oc-vit-bulong-item">
                                        <div class="box-oc-bu-img">
                                            <a href="javascript:void(0);">
                                                <div class="box-product-featured-img">
                                                    <img src="<?php echo wp_upload_dir( null,true,false )["url"]."/bulong-304.jpg"; ?>" alt="<?php echo get_bloginfo( 'name', 'raw' ); ?>">
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
                                        <h3 class="box-oc-bu-title"><a href="javascript:void(0);">Bu lông lục giác chìm đầu trụ DIN 912</a></h3>
                                    </div>
                                </div>
                                <?php
                                $k++;
                                if($k%3 == 0 || $k==9){
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-lg-3">
                <?php include get_template_directory()."/block/block-right-sidebar.php"; ?>
            </div>
            <?php
            get_footer();
            ?>