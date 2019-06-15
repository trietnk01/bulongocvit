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
                <div class="banner-box">
                    <?php
                    $data_banner=get_field("hp_banner_rpt","option");{
                        if (count(@$data_banner) > 0) {
                            ?>
                            <div class="owl-carousel-banner owl-carousel owl-theme owl-loaded">
                                <?php
                                foreach ($data_banner as $key => $value) {
                                    ?>
                                    <div class="item">
                                        <img src="<?php echo @$value["hp_banner_item"]; ?>" alt="<?php echo get_bloginfo( 'name', 'raw' ); ?>">
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
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="box-dmsp">
                    <h2 class="dmsp-h">Danh mục sản phẩm</h2>
                    <ul class="dmsp-lst"></ul>
                </div>
            </div>
            <div class="col-lg-6"></div>
            <div class="col-lg-3"></div>
        </div>
    </div>
    <?php
    get_footer();
    ?>